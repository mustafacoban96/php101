<?php

require_once "oturumKontrolu.php";

if(isset($_POST["pass1"])){
    if($_POST["pass2"] != $_POST["pass3"]){
        echo "Yeni Parola yanı değil...";
        die();
    }

}

if(isset($_POST["pass1"])){
    // Form submit edilmiş demektir..
    // echo "<pre>; print_r($_POST); echo "</pre>";

    require_once "config.php";

    $SQL = sprintf("UPDATE kullaniclar SET kullaniciparolasi = '%s' WHERE id= '%s' AND kullaniciparolasi = '%s' ", $_POST["pass1"], $_SESSION["id"], $_POST["pass1"]);
    $result = mysqli_query($mysqli, $SQL);
    header("Location : islemTamam.php ");
    die();
}

?>

<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>PHP Örneğimiz</title>
</head>
<body>

    <a href="menu.php">Ana Sayfa</a>
    <h1>Parola Güncelleyin...</h1>

    <form action="" method="post">

    <p>Adı Soyadı: <?php echo $_SESSION["adisoyadi"]?></p>

    <p>Mevcut Parolaniz : 
        <input type="password" name="pass1" value=""></p>
    <p>Yeni Parolaniz:
        <input type="password" name="pass2" value=""></p>
    <p>Yeni Parolaniz(Tekrar):
        <input type="password" name="pass3" value=""></p>
    <button type="submit">Güncelle</button>
    
    </form>
</body>
</html>