<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $h_password = password_hash($password, PASSWORD_DEFAULT);
      echo "HEllo World<br><br>";
  if ( !is_null( $username ) ) {
    $jb_conn = mysqli_connect( 'localhost', 'myuser1', 'if8QV06jvIs8!@','myuser1' );
    $jb_sql = "SELECT * FROM sqliLogin1 WHERE id = '$username' and pw = '$password'   ";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );

    print_r($jb_sql);
    echo "<br>";
    print_r($jb_result);
    echo "<br><br>";
      if(!$jb_result){
  alert('QUERY ERROR! : ' .mysql_error());
  }
    if ( $result=mysqli_fetch_array( $jb_result ) ) {
        session_start();
        $_SESSION['username'] = $jb_row['id'];
        echo "<br>L O G I N   S U C C E S S !<br>";
    echo "</br>$username 님 환영합니다!";
      } else {
        echo ' Wrong Password!';
      }
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
