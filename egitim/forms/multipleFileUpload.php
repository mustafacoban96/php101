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
     * move_uploaded_file()
     * 
     * 
     * */
	
	
	$GelenDosyalar = $_FILES["dosyalar"];
	echo "<pre>";
    print_r($GelenDosyalar);
	echo "<pre>";
	$fileTmp = $_FILES["dosyalar"]["tmp_name"];
	echo "<br>";
	echo "<pre>";
	print_r($fileTmp);
	echo "<pre>";
	
	$path = "C:/Users/shepherd/Desktop/salla/";
	$filesName = $_FILES["dosyalar"]["name"];
	
	echo "asdas : ".count($fileTmp);
	
	//echo $filesName[1];
	
	$filesNameAndPath;
	for ($i = 0; $i < count($fileTmp); $i++) {
	    $filesNameAndPath = $path.$filesName[$i];
	    
	    move_uploaded_file($fileTmp[$i], $filesNameAndPath);
	}
	
	
	
	
	
    ?>
	</body>
</html>