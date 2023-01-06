<?php

require "functions.php";
//

if($_SERVER["REQUEST_METHOD"] == "POST"){
   
   
    $email = addslashes($_POST["email"]);
    $password = addslashes($_POST["password"]);
    $date = date('Y-m-d H:i:s');


    /////
    $query = "select * from users where email = '$email' && password= '$password' limit 1";

    $result = mysqli_query($conn, $query);
    //print_r($result) // output: mysqli_result Object ( [current_field] => 0 [field_count] => 6 [lengths] => [num_rows] => 1 [type] => 0 );
    
    //3.....**
    if (mysqli_num_rows($result) > 0){
        
            $row = mysqli_fetch_assoc($result);
            //print_r($row);

            $_SESSION["info"] = $row;
        
            header("Location: profile.php");
            die();

    }else{
        $error = "wrong email or password";

    }

}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - My website</title>
</head>
<body>
    <?php require "header.php"?>

    <div style = "margin: auto; max-width: 600px;">
    <?php
        if(!empty($error)){
        echo "<div>" . $error . "</div>";
        }
    ?>
        <h2 style= "text-align: center;">Login</h2>
    <form method="post" style = "margin: auto; padding: 10px;">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        
        <button>Login</button>
    </form>
    </div>
    
    
    <?php require "footer.php"?>
    
    
</body>
</html>