<?php 
// DB info
$databaseHost = 'localhost';
$databaseName = 'myblog';
$databaseUsername = 'root';
$databasePassword = '';


// connect to databese 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// DB UTF-8 
$result = mysqli_query($mysqli, "SET NAMES utf8");


?>