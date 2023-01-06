<?php
/*ini_set('session.gc_maxlifetime', 3600);
session_set_cookie_params(3600);*/
session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "todo_app";


$conn = mysqli_connect($hostname, $username, $password, $db_name);



?>