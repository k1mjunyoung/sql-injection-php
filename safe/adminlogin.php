<?php
	include("connect.php");
    $message = "";
?>

<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>로그인</title>
    <style>
      body { font-family: sans-serif; font-size: 14px; }
      input, button { font-family: inherit; font-size: inherit; }
    </style>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="/css/loginstyle.css"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" type="text/css" href="/css/common.css" />
		<script defer type="text/javascript">     
			function validateForm() {
				const nameInput = document.getElementById("username").value;
				const passwordInput = document.getElementById("password").value;
				const idExpText = /^[가-힣A-Za-z0-9]/g;
				const passwordExpText = /['"\\\-#()@;\=*/+]/g;
				if (idExpText.test(nameInput) == true) {
				alert("특수문자를 입력 할수 없습니다.");
				return false;
				}
				if (passwordExpText.test(passwordInput) == true) {
				alert("해당 특수문자를 입력 할수 없습니다.");
				return false;
				}
				return true;
			}
		</script>
  </head>

	<body>
<?php
	if(isset($_POST["form"]))
	{
		$id = $_POST["username"];
		
		$password = $_POST["password"];
		
		$sql = "SELECT * from sqliLogin1 WHERE id = '" . $id . "' and pw='" . $password . "'";
		// echo $sql;

		$recordset = mysqli_query($link, $sql);

		if(!$recordset){
			echo "<br>";
			die("Error: " .mysqli_error($link));
		}
		else{
		$row = mysqli_fetch_array($recordset);
		if($row["id"]){
			$message = "<font color=\"white\">Login SUCCESS! <br>" . $row["id"] . " Welcome!</b></font>";
		}
		else{
		$message = "<font color=\"yellow\">계정 정보를 잘못 입력했습니다.</font>";
		}
	}
	mysqli_close($link);
}
?>
<div class="center-block">
<p class="bg-danger"><?php echo $message; ?></p>
</div>

		<div class="login">
			<form action="adminlogin.php" method="post" id="myForm">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<div class="msg">관리자용 로그인</div>
				<button type="submit" class="btn btn-success" name="form" value="submit">LOGIN</button>
			</form>
		</div>
		<script>
      document.getElementById("myForm").addEventListener("submit", (event) => {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        if (!isValidUsername(username)) {
          event.preventDefault();
          alert("특수문자를 사용할 수 없습니다.");
        }

        if (isValidPassword(password)) {
          event.preventDefault();
          alert("비밀번호에 해당 특수문자를 사용할 수 없습니다.");
        }
      });

      function isValidUsername(username) {
        const pattern = /^[a-zA-Z가-힣0-9]+$/;
        return pattern.test(username);
      }

      function isValidPassword(password) {
        const pattern = /['"\\\-#()@;\=*/+]/g;
        return pattern.test(password);
      }
    </script>

  </body></html>
