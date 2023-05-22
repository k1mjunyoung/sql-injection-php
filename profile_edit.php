<?php
	session_start();
	$session_username = $_SESSION['username'];
	if( is_null($session_username) ) {
	    header( 'Location: login.php' );
	}

	header('Content-Type: text/html; charset=utf-8');

	$db = new mysqli("localhost", "testID", "testPW", "sql_injection");
	$db -> set_charset("utf8");

	function mq ($sql)
	{
	    global $db;
	    return $db -> query($sql);
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>내 정보</title>
</head>
<body>
	<div class="find">
		<form method="post" action="profile_update.php">
			<?php
				$sql1 = mq("select * from member where id ='{$_SESSION['username']}'");
	while($member = $sql1->fetch_array()){
			?>
	<h1>내 정보</h1>
		<fieldset>
			<legend>Profile</legend>
				<table>
					<tr>
						<td>아이디</td>
						<td><input type="text" size="35" name="username" value="<?php echo $_SESSION['username']; ?> (아이디는 변경불가)" disabled></td>
					</tr>
					<tr>
						<td>이름</td>
						<td><input type="text" size="35" name="name" placeholder="이름" value="<?php echo $member['name']; ?>"></td> 	
					</tr>
					<tr>
						<td>주소</td>
						<td><input type="text" size="35" name="address" placeholder="주소" value="<?php echo $member['address']; ?>"> </td>" 
					</tr>
					<tr>
						<td>성별</td>
						<td>남<input type="radio" name="sex" value="남"> 여<input type="radio" name="sex" value="여"></td>
					</tr>
					<tr>
						<td>이메일</td>
						<td><input type="text" size="35" name="email" placeholder="이메일" value=<?php $str= explode("@", $member['email']); $str = $str[0]; echo $str; ?>>@<select name="emaddress"><option value="naver.com">naver.com</option><option value="nate.com">nate.com</option><option value="hanmail.com">hanmail.com</option><option value="daum.net">daum.net</option><option value="gmail.com">gmail.com</option></select></td>  
					</tr>
				</table>
			<a href="profile.php">뒤로</a>
			<input type="submit" value="변경 하기" />
			</fieldset>
		<?php } ?>
		</form>
	</div>	
</body>
</html>

	

