<?php

header('Content-Type: text/html; charset=utf-8');

$server_name = "localhost";
$user_name = "root";
$passoword = "";
$db_name = "baixada_hoteis";

$connection = mysqli_connect($server_name,$user_name,$passoword,$db_name);

mysqli_set_charset($connection, "utf8");

?>
