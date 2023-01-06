<?php
require_once "oturumKontrolu.php";
require_once "config.php";

$SQL = sprintf("SELECT * FROM yazilar WHERE id ='s%' ", $_GET["id"]);
$kayitlar = mysqli_query($mysqli, $SQL);
$kayit = mysqli_fetch_array($kayitlar);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>PHP Örneğimiz</title>
</head>
<body>

    <a href="menu.php">Ana Sayfa</a>

    <h1><?php echo $kayit["baslik"]; ?></h1>
    <?php echo $kayit["yazi"]; ?>
    
    <p><a href="yazıGüncelle.php?id=<?php echo $kayit["id"];?>">Güncelle...</a></p>
    
</body>
</html>