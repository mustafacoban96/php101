<?php

session_start();

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "todo_app";

$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

?>