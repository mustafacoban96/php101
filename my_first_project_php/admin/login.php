<?php
session_start();
if(isset($_SESSION["girisyapti"]) and $_SESSION["girisyapti"] == 1){
    // User have already logged. route the menu
    /*
    The header in PHP is a PHP built-in function for sending a raw HTTP header. 
    The HTTP functions are those that manipulate information sent by the webserver to the client or browser before it sends any further output.
    The header() function in PHP sends a raw HTTP header to a client or browser. 
    */
    header("Location: menu.php");
    die();
}

if(isset($_POST["user"])){ // we work to login
    $user = $_POST["user"];
    $pass = $_POSR["pass"];
    //
    require_once "config.php";
    //
    $SQL = "select * from kullanicilar where kullaniciadi = '{$user}' AND kullaniciparolasi = '{$pass}' ";

    $kayitlar = mysqli_query($mysqli, $SQL);
    $kayit = mysqli_fetch_array($kayitlar);

    $KayitAdedi = ($kayitlar);

    if($KayitAdedi == 1){ // login succesfully
        session_start();
        $_SESSION["adisoyadi"] = $kayit["adisoyadi"];
        $_SESSION["id"] = $kayit["id"];
        $_SESSION["girisyapti"] = 1;
        header("Location: menu.php");

    }else{
        session_start();
        $_SESSION["girisyapti"] = 0;
        echo "parola yanlış";
    }
}
?>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    
    <title>PHP Örneğimiz</title>
</head>
<body>
    <h1>Yönetim paneli Girişi</h1>

    <form action = "" method = "post">
        <p>Kullanıcı Adınız: <input type="text" name="user" value="" autocomplete="off"></p>
        <p>Kullanıcı Parolanız: <input type="password" name="pass" value=""></p>
        <p><button type = "submit">Giriş yap</button></p>
    </form>    
</body>
</html>