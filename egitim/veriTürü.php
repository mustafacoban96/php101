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
	
	/*
	 * gettype()
	 * settype($deger, veri türü) : herhangi bir değişken içeriğinin veri türünü belirlemek / değiştirmek için kullanılır.
	 * 
	 * 
	 * 
	 * 
	 * 
	 * */
    /*$Deger = 8.12;
    $Sonuc = gettype($Deger);
    
    echo $Sonuc;
	
    echo "içerik: ".boolval($Deger)." <br/>";
    $DegerVer = gettype($Deger);
    echo "Veri türü : ".$DegerVer."<br>";*/
	
	
	$Bilgiler = array("Mustafa", "Musa", "Antep", "asdkasdjlasdj", 23);
	
	
	$Sonuc = serialize($Bilgiler);
	
	
	echo "<pre>";
	print_r($Bilgiler);
	echo "<pre>";
	
	echo $Sonuc;
	
	
	/*"a:5:{i:0;s:7:"Mustafa";
    i:1;s:4:"Musa";
    i:2;s:5:"Antep";
    i:3;s:13:"asdkasdjlasdj";
    i:4;i:23;}"*/
	
	
	echo "<br>";
	
	$Result = unserialize($Sonuc);

    
	echo "<pre>";
	print_r($Result);
	echo "<pre>";
	
	
	
	
	
	
	
	
	
    
	
    ?>
	</body>
</html>