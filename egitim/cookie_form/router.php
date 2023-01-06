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
	
	$isim = $_POST["isim"];
	$soyisim = $_POST["soyisim"];
	$yasamSuresi = time() + 30;
	
	setcookie("KullanıcıAdı", $isim,$yasamSuresi);
	setcookie("KullanıcıSoyadı", $soyisim,$yasamSuresi);
	

	?>
	<a href="messagePage.php">Mesaj Goster</a>
	</body>
</html>