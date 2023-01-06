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
	 * move_uploaded_file() : to upload a file directory that we specify
	 *
	 *
	 *
	 *
	 *
	 * */
	
	$GelenFile = $_FILES["dosya"];
	$Filename = $_FILES["dosya"]["name"];
	// file is an array.
	
	//echo "file extension: ".$_FILES["dosya"]["type"]."<br>";
	
	/*echo "<pre>";
	 print_r($GelenFile);
	 echo "<pre>";*/
	
	$path = "C:/xampp/htdocs/egitim/forms/";
	$fileTmp = $_FILES["dosya"]["tmp_name"];
	
	$FilenameAndpath = $path.$Filename;
	echo $FilenameAndpath."<br>";
	if(move_uploaded_file($fileTmp,$FilenameAndpath)){
	    echo "<img src ='{$FilenameAndpath}'>";
	}else{
	    echo "file was not found...";
	}
	
	
    ?>
	</body>
</html>
