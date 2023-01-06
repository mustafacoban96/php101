<!DOCTYPE html>
<html lang ="tr-TR">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">

<title>Egitim</title>
</head>
	<body>
	
	<?php 
    $ad = $_COOKIE["KullanıcıAdı"];
    $soyad = $_COOKIE["KullanıcıSoyadı"];
    
    
    $message = "Merhaba ".$ad." ".$soyad." nasılsın?";
    echo "<br>";
    echo $message;
    ?>
    
    
    <a href = "cookiee.php" >Forma dön</a>
	</body>
</html>