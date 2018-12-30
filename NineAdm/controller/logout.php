<?php
session_start();
$_SESSION = array();
header("Location: ../controller/index.php");
die();
