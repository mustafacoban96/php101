<?php

require_once "oturumKontrolu.php";

require_once "config.php";

$SQL = "SELECT * FROM yazilar ORDER BY id DESC";
$kayitlar = mysqli_query($mysqli, $SQL);

?>

<html lang="tr">
<head>
    <meta charset="UTF-8">
    
    <title>PHP Örneğimiz</title>
</head>
<body>
    <a href="menu.php">Ana Sayfa</a>

    <h1>Blog Sitemizdeki Yazilar...</h1>


    <ul>
        <?php 
        while($kayit = mysqli_fetch_array($kayitlar)) {
            echo sprintf("<li><a href='yazioku.php?id=%s'>%s</a><br>
                        Yazarı: %s, Yayın tarihi: %s </li>",
                $kayit["id"],
                $kayit["baslik"],
                $kayit["yazar"],
                date("d.m.Y", strtotime($kayit["tarih"]))
            );
        }
        ?>

        
    </ul>
</body>
</html>