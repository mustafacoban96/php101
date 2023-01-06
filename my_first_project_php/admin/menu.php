<?php

require_once "oturumKontrolu.php";
?>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    
    <title>PHP Örneğimiz</title>
</head>
<body>

    <h1>Yönetim paneli</h1>

    <p>Aktif Kullanıcı : <?php echo $_SESSION["adisoyadi"];?></p>

    <ul>
        <li><a href="yazi_ekleme_formu.php">Yazı ekle</a></li>
        <li><a href="listele.php">Listele/Güncelle/Sil</a></li>
        <li><a href="parolaDesgistir.php">Parola Değiştir</a></li>
        <li><a href="oturumkapat.php"><?php echo $_SESSION["adisoyadi"];?>Oturumunu Kapat</a></li>
    </ul>
    
</body>
</html>