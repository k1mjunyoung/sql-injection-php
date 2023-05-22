<?php

$link = mysqli_connect('localhost', 'root', '1234', 'sql_injection');

if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql = "SELECT VERSION()";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
print_r($row["VERSION()"]);
?>