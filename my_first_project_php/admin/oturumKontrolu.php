<?php
session_start();

if(isset($_SESSION["girisyapti"]) and $_SESSION["girisyapti"] == 1){
    // session have already logged successfully...
}else{
    header("Locaiton: login.php");
    die();
}






?>