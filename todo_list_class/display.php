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
    include "sinif2.php";
    $numara =  $_SESSION["user_id"];
    
    $obje = new Yapilacak($numara);
    $obje->db = $conn;
    $obje->display();
    
    if(isset($_POST["program"])){
        $obje->add($_POST["program"]);
        header("Location:display.php?eklendi=" . urlencode("veri eklendi."));
        die();
    }
    if(isset($_POST["postID"])){
        $obje->delete( $_POST["postID"]);
        header("Location:display.php?silindi=" . urlencode("Veri silindi."));
        die();
    }

    if(!empty($_POST["GpostID"]) && !empty(($_POST["Gprogram"]))){
        if(isset($_POST["GpostID"]) && isset($_POST["Gprogram"])){
            $obje->update($_POST["GpostID"], $_POST["Gprogram"]);
            header("Location:display.php?guncellendi=" . urlencode("veri güncellendi"));
            die();
        }
    }    
    ?>
<br>
<form action="" method="post">
    Ekle : <input type="text" name="program">
    <input type="submit" value="Ekle">
</form>
<form action = "" method="post">
    PostID : <input type ="text" name="postID">
    <input type="submit" value="Sil">
</form>
<form action="" method="post">
    Güncelleme Alanı <br>
    postID : <input type="text" name = "GpostID"> ||
    Güncel Program : <input type = "text" name = "Gprogram">
    <input type="submit" value="güncelle">
</form>
<?php
if(isset($_GET["Logout"])){
    echo $_GET["Logout"];
}
?>
<form action="logout.php" method="post">
    <input type="submit" value="Çıkış">
</form>
<?php ?>





</body>
</html>