<?php

$link = mysqli_connect('localhost', 'root', 'root', 'sql_injection');

if(!$link)
{
	die("Could not connect to the server: " .mysql_error());
}


?>