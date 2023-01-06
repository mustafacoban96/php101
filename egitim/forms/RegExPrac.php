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
	 * preg_match() : karakter bulunca döner.
	 * 
	 * preg_filter() or preg_replace() : yer değiştirme
	 * preg_split()
	 * */
	
	//$metin = "Mustafa çoban 26 Gaziantep şehitkamil Hasan Kalyoncu üniversitesi Bilgisayar Mühendisliği";
	
    //$pattern = "/çoban/";
    //$pattern = "/Bilgisayar/";
    //$npattern = "Elektrik Elektronik";
    
   // preg_match($pattern, $metin, $matches);
    // preg_filter(ara, degistir, içerik);
    
    //$result = preg_filter($pattern,$npattern,$metin);
	//echo $result;
	
	/*$Desne = "/ /";
	$result = preg_split($Desne, $metin);
	echo "<pre>";
	print_r($result);
	echo "<pre>";*/
    
	
	/*
	 * preg_grep() : eşelşen değerleri alır ve dizi olulturu.
	 * preg_quote() : birleştirme
	 * 
	 * 
	 * */
	
	/*$Degerler = array(22, 12, 143, 252, 82, 104);
	$Desen = "/2/";
	$Sonuc = preg_grep($Desen,$Degerler);
	
	echo "orjinal hali : <br>";
	echo "<pre>";
	print_r($Degerler);
	echo "<pre>";
	
	echo "Eşleşen değerlerden oluşan yeni dizi : <br />";
	echo "<pre>";
	print_r($Degerler);
	echo "</pre><br /><br />";
	
	/*
	 * ^ : içeriğin başındaki kelimeyi kontrol eder.
	 * 
	 * 
	 * 
	 * 
	 * 
	 * 
	 * */
	 $icerik = "Mustafa alsjdlasdk asdsadada das";
	 $aranan = "/^Musto/";
	 
	 $Sonuc = preg_match($aranan, $icerik); //0
	 
	 echo "<pre>";
	 print_r($Sonuc);
	 echo "<pre>";
	
	
	
	
	
	
	
	
	
	
	
    ?>
	</body>
</html>