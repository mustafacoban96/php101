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
    $Degerler = array("Mustafa","Musa","lale");
    
    foreach ($Degerler as $anahtar => $element){
        echo $anahtar ." => ".$element."<br/>";
    }
    
    
    
    $takımlar = array("sar-lacivert" => "FB" , "sarı-kırmızı" => "GS", "siyah-beyaz" => "BJK");
    
    
    foreach ($takımlar as $renk => $takım ) {
        echo $renk." => ".$renk;
    }
    ?>
	</body>
</html>