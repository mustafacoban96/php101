
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    require "connection.php";

    $email = $_POST["userEmail"];
    $password = $_POST["userPassword"];
    $username = $_POST["userName"];

    /*echo "<pre>";
    print_r($_POST);
    echo "<pre>";*/

    $query = "select email from userinfo where email ='$email'" ;
    $execute = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($execute);

    
    if(empty($row)){
        $query = "insert into userinfo (username, email, password) values ('$username', '$email','$password')";
        $execute = mysqli_query($conn, $query);
        header("Location:loginForm.php");
        die();
        
        
    }
    else{
    
    echo "<br> Bu maile ait zaten bir hesap var.";
    header("Location:signupForm.php?eMessage=".urlencode("Bu mail zaten var"));
    
        
    }
    
    ?>
    
</body>
</html>