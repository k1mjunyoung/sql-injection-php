<?php
    $username = $_POST['username'];
    $password =  $_POST['password'];
    $h_password = password_hash($password, PASSWORD_DEFAULT);

    $jb_conn = mysqli_connect( 'localhost', 'testID', 'testPW', 'sql_injection' );
    $jb_sql = "SELECT * FROM member WHERE id = '" .$username. "' and pw = '"  .$h_password.  "'   ";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
      echo "HEllo World";
while ( $jb_row = mysqli_fetch_array( $jb_result ) ) {
      $encrypted_password = $jb_row[ 'pw' ];
    }
    if ( is_null( $encrypted_password ) ) {
      $wu = 1;
    } else {
		    session_start();
		    $_SESSION[ 'username' ] = $username;
	      echo "\nLOGIN SUCCESS!\n";
    }

?>


<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>로그인</title>

</head>
<body>
<form action="sqlitest.php" method="post">
				<label for="username">
				<input type="text" name="username" placeholder="Username" id="username" required>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<div class="msg">계정정보를 입력해주세요</div>
				<input type="submit" value="Login">
			</form>

	</body></html>
