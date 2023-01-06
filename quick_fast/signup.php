<?php
require "functions.php";
//
//When user post something...(notes1...**)//
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //echo "posted";
    //print_r($_POST);

    //collecting data to record database....
    $username = addslashes($_POST["username"]);
    $email = addslashes($_POST["email"]);
    //2...notes**//
    $password = addslashes($_POST["password"]);
    $date = date('Y-m-d H:i:s');
    
    /////
    $query = "insert into users (username ,email, password, date) values ('$username', '$email','$password','$date')";
    $result = mysqli_query($conn, $query);

    header("Location: login.php");
    die();
    
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - My website</title>
</head>
<body>
    <?php require "header.php"?>

    <div style = "margin: auto; max-width: 600px;">
        <h2 style= "text-align: center;">Signup</h2>
    <form method="post" style = "margin: auto; padding: 10px;">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="password" placeholder="Password" required><br>
        
        <button>Signup</button>
    </form>
    </div>
    
    
    <?php require "footer.php"?>
    
    
</body>
</html>