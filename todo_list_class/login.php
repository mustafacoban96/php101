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

    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $kullanici = new User(null, $email, $password);
    $kullanici->db = $conn;
    $giris = $kullanici->login();

    if(is_array($giris) && !$giris["status"]){
        echo $giris["hata"];
    }



    if($giris["data"]["id"] > 0){
        header("Location:display.php");
        die();
    }else{
        echo "Email ya da parola hatalı";
        header("Location:loginForm.php?hataliGiris=" . urlencode("Email ya da parola hatalı"));
    }
    
    
    
    
    ?>
</body>
</html>