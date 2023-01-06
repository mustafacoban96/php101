<?php
session_start();
//$conn = mysqli_connect("www.server.com",username,password,db_name) 

$databaseHost = "localhost";
$databaseName = "beginner_db";
$databaseUsername="root";
$databasePassword = "";
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);



?>