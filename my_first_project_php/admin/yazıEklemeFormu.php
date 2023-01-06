<?php

require_once "oturumKontrolu.php";

if(isset($_POST["yazar"])){
    // Form submit edilmiş
    // echo "<pre>"; print_r($_POST); echo "</pre>";

    //
    require_once "config.php";
    //
    $SQL = sprintf(
        "INSERT INTO yazilar (yazar, tarih, baslik, yazi) VALUES('%s', '%s', '%s', '%s')",
        $_POST["yazar"], $_POST["tarih"], $_POST["baslik"], $_POST["yazi"]
    );

    $result = mysqli_query($mysqli, $SQL);

    header("Location: islemTamam.php");
    die();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>PHP Örneğimiz</title>
</head>
<body>

    <a href="menu.php">Ana Sayfa</a>

    <h1>Yazı Ekleyelim...</h1>

    <form action="" method="post">
        <p>Yazarı: <b style="color:darked;"><?php echo $_SESSION["adisoyadi"]; ?></b>
        <input type="hidden" name="yazar" value="<?php echo $_POST["adisoyadi"];?>"></p>
        <p>Yayın Tarihi :<input type = "text" name="tarih" value="" placeholder="yıl-ay-gun formatında"></p>
        <p>Yazı Başlığı: <input type="text" name="baslik" value="" placeholder=""></p>
        <p>Yazı İçeriği : <textarea name="yazi" style="width: 500px; height:150px;"></textarea></p>

        <button type="submit">Gönder</button>
    </form>
    
</body>
</html>