<?php
$Username = $_POST['id'];
$Password = $_POST['pw'];
$Connect = mysqli_connect('localhost', 'myuser1', 'if8QV06jvIs8!@', 'myuser1') or die(1);
$sql = "SELECT * FROM member WHERE id = '$Username'";
$output = mysqli_query($Connect, $sql);
if (mysqli_num_rows($output) > 0) {
    while($row = mysqli_fetch_assoc($output)) {
	if (password_verify($Password, $row['pw'])) {
	                $_SESSION = $row;
			            header('Location: sqlitest3.php');
			        
	} else {
	                echo 'Invalid Username or Password';
			        
	}
	    
    }

} else {
        echo 'Invalid Username or Password';
	
}

?>

<form action="" method="POST">
	<input type="text" name="id" placeholder="id" autocomplete="off">
	<input type="password" name="pw" placeholder="password">
	<button type="submit">login</button>
</form>
