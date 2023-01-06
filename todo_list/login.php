
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo - Login</title>
</head>
<body>
    <?php
    require "connection.php";

    $email = $_POST["userEmail"];
    $password = $_POST["userPassword"];

    $query = "select * from userinfo where email= '$email' && password = '$password' ";
    $execute = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($execute);



    //// oturmu yakalama
    
    $query2 = "select id from userinfo where email='$email' && password = '$password'";
    $execute2 = mysqli_query($conn,$query2);
    $row2 = mysqli_fetch_assoc($execute2);


    $_SESSION["user_id"] = $row2["id"];
    
    /////
    

    /////
    if($row["email"] == $email && $row["password"] == $password){
        Header("Location:newDisplay.php");
        die();
    }
    else{
        echo "email ya da şifre hatalı";

        //Yönlendirme!!!!!!!!!!!
        header("Location:loginForm.php?erMessage=".urlencode("Email ya da şifre hatalı"));
    }

    //// dataları çektim karşılaştırmak için/////////
    /*while($row = mysqli_fetch_assoc($execute);){
        echo "<pre>";
        print_r($row);
        
        echo "<br>";
    }*/


    
    

    
    ?>
</body>
</html>