<?php
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ( !is_null( $username ) ) {
    $jb_conn = mysqli_connect('localhost', 'root', 'root', 'sql_injection');
    $jb_sql = "SELECT pw FROM member WHERE id = '" . $username . "';";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while ( $jb_row = mysqli_fetch_array( $jb_result ) ) {
      $encrypted_password = $jb_row[ 'pw' ];
    }
    if ( is_null( $encrypted_password ) ) {
      $wu = 1;
    } else {
	    if ( password_verify( $password, $encrypted_password ) ) {
		    session_start();
		    $_SESSION[ 'username' ] = $username;
	            header( 'Location: login-ok.php' );
      } else {
        $wp = 1;
      }
    }
  }
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
    <link rel="stylesheet" type="text/css" href="/css/loginstyle.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="/css/common.css" />
    <script defer type="text/javascript">     
      function validateForm() {
        const nameInput = document.getElementById('username').value
        const passwordInput = document.getElementById('password').value
        const idExpText = /^[가-힣A-Za-z0-9]/g;
        const passwordExpText = /['"\\\-#()@;\=*/+]/g;
        if (expText.test(nameInput) == true) {
          alert("특수문자를 입력 할수 없습니다.");
          return false;
        }
        if (expText.test(passwordExpText) == true) {
          alert("해당 특수문자를 입력 할수 없습니다.");
          return false;
        }
        return true;
      }
    </script>
  </head>

	<body>
		<div class="login">
			<h1>Login</h1>
			<div class="links">
				<!--
        <a href="login1.php" class="active">Login</a>
        -->
				<a href="signUp.html">Register</a>
			</div>
			<form action="login.php" method="post" onclick="return validateForm();">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<div class="msg">계정정보를 입력해주세요</div>
				<input type="submit" value="Login">
			</form>
		</div>
	</body></html>
