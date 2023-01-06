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
     * include()        : dosyayı kontrol etmeden hatayı görmez ve okumaya devam eder.
     * include_once()   : dosyayı kontrol eder hail edildiyse eklmez hatayı görmez ve okumaya devam eder.
     * require()        : dosyayı kontrol etmeden dahil eder. okur ve kodda hata varsa okumaya devam etmez.
     * require_once()   : dosyayı kontrol eder hail edildiyse eklmez hatayı görmez ve okumaya devam etmez.
     * 
     * 
     * 
     * 
     * */
	
	echo "first line.<br>";
	
	include("Examplefile.php"); // php dosyasnın içini okur.
	
	/*
	 * basename() 
	 * dirname()
	 * pathinfo() >> return path's elements as array
	 * realpath() >> return path
	 * 
	 * 
	 * */
	echo"<br>*******************************<br>";
	
	
	//$myfile = "C:/Users/shepherd/Desktop/salla/filess.txt";
	/*$filename = basename($file);
	echo $filename."<br>";
	$dizin = dirname($file);
	echo $dizin;
	$path = pathinfo($file);
	echo "<pre>";
    print_r($path);
	echo "<pre>";
	echo "<br>";
	$path1 = realpath($file);
	echo "<pre>";
	print_r($path1);
	echo "<pre>";*/
	
	/////////// file info function //////////////////
	
	/*
	 * filetype() : deger = file : dosya & dir : klasör
	 * fileowner()
	 * filegroup()
	 * fileinode()
	 * fileperms()
	 * filesize()
	 * filesize()
	 * filesize()
	 * filectime()
	 * filemtime()
	 * fileatime()
	 * 
	 * */
	
	/*$file_type = filetype($myfile);
	$sahip = fileowner($myfile);
	echo $file_type."<br>";
	echo $sahip;*/
	
	//////////////////////////////////////////////////////
	/*
	 * touch : create a file
	 * ulink : remove a file
	 * copy : 
	 * rename :
	 * */
	
	
	$Ornek = "source.txt";
	$olddir = "Eski/";
	$newdir = "Yeni/";
	$filePath = $olddir.$Ornek;
	$newFilePath = $newdir.$Ornek;
	mkdir($olddir);
	touch($filePath);
	mkdir($newdir);
	rename($newFilePath,$filePath);
	
	
	
	
	
	//mkdir($newFol);
	/*$Directory = realpath($Ornek);
	echo "<br>";
	echo $Directory;
	echo "<br>";*/
	
	
	
	//rmdir($oldFol);
	
	
	
	//$kopya = "target.txt";
	//echo copy($Ornek, $kopya); // content is copied into target.txt
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    ?>
	</body>
</html>