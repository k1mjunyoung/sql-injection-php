<?php

$link = mysqli_connect('localhost', 'root', '1234', 'sql_injection');

if(!$link)
{
	die("Could not connect to the server: " .mysql_error());
}


?>