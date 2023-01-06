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
    include "sinif.php";


    $kullanici = new User($_POST["username"], $_POST["email"], $_POST["password"]);
    $kullanici->db = $conn;
    $kayit = $kullanici->signup();

    
    if($kayit){
        header("Location:loginForm.php");
        die();
    }
    else{
        echo "Bu maile ait zaten bir hesap var";
        header("Location:signupForm.php?aWarning=" . urlencode("Bu mail zaten kayitli"));
    }
    
    
    
    
    ?>
</body>
</html>