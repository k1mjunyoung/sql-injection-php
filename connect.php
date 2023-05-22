<?php

$link = mysqli_connect('3.39.97.182', 'root', '1234', 'sql_injection', '3306');

if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql = "SELECT VERSION()";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
print_r($row["VERSION()"]);
?>