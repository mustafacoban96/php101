<?php
//session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo - App</title>
</head>
<body>

    <?php 
    require "connection.php";

    echo "Welcome to tode - app";
    $Gelen_plan = $_POST["yapılacak"];

    $user_id = $_SESSION["user_id"];
    $query = "insert into yapılacak (program,user_id) values ('$Gelen_plan','$user_id')";
    
    //$query2= "insert into yapılacak (user_id) select id from userinfo";
    //$execute2 = mysqli_query($conn, $query2);
    
    
    

    if (!empty($Gelen_plan)) {
        $execute = mysqli_query($conn, $query);
        header("Location:newDisplay.php");
        die();
    }
    

    ?>
</body>
</html>