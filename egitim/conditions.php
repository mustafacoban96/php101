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
    /*$Deger = 10;
    
    switch ($Deger) {
        case $Deger < 5:
            echo "Deger 5'den kucuk";
            break;
        case $Deger >= 10:
            echo "Deger 10 a eşit ya da buyuk";
            break;
        
        default:
            echo "deger bir sayi degil";
        
    }
    
    echo "<br>";
    
    
    $Value = "Mustafa";
    
    $Sonuc = ($Value == "Mustafa") ? "Doğru" : "Yanlis";
    
    echo $Sonuc;*/
	
	
	// Null conditions
	
	$isim = $_GET["KullanıcıAdı"] ?? "Hata";
	$soyisim = $_GET["KullanıcıSoyadı"] ?? "Hata";
	
	
	echo "Gelen isim: {$isim}"."<br>"; 
	
	echo "Gelen soyisim: {$soyisim}"."<br>";
	
	
	
	// goto
	
	/*goto coban;
	
	echo "1<br>";
	echo "2<br>";
	echo "3<br>";
	echo "4<br>";
	
	coban:
	
	echo "5<br>";
	echo "6<br>";
	echo "7<br>";*/
	
	
	
	
    ?>
	</body>
</html>