<?php
if (!empty($_POST['id']) && !empty($_POST['pw'])) {
	$db = mysqli_connect('localhost', 'myuser1', 'if8QV06jvIs8!@', 'myuser1') or die('1');
	$sql = "select * from member where id='".$_POST['id']."'";
	$result = mysqli_query($db, $sql);
	echo mysqli_num_rows($result);
	if (mysqli_num_rows($result) == 1) {
	    	$row = mysqli_fetch_row($result);
		$hpw = $row[2];
	   	if (  password_verify( $_POST['pw'], $hpw ) )
		{
			echo"로그인 성공";
		}
		mysqli_close($db);
	}

}
?>
<form action="" method="POST">
	<input type="text" name="id" placeholder="id" autocomplete="off">
	<input type="password" name="pw" placeholder="password">
	<button type="submit">login</button>
</form>
