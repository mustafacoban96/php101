<html lang="en">
<head>
    <meta charset="UTF-8">
    
    
    <title>PHP örneğimiz</title>
</head>
<body>
    <h1> PHP çalışıyoruz</h1>

    <?php

    // <b> yazıyı kalın gösterir.
    echo "<h3>ID Değişkeni: <b>" . $_GET["id"] . "</b></h3>";
    echo "<h3>ID Değikeni: <b>{$_GET["id"]}</b></h3>";

    echo sprintf("<h3>ID Değişkeni: <b>%s</b></h3>", $_GET["id"]);
    echo sprintf("<h3>ID Değişkeni: <b>%s</b></h3>", $_GET["ad"]);
    echo sprintf("<h3>ID Değişkeni: <b>%s</b></h3>", $_GET["soyad"]);
    
    
    ?>
    
</body>
</html>