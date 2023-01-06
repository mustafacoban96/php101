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
	 * move_uploaded_file
	 * */
        $gelenFiles = $_FILES["dosyalar"];
        $AdSoyad = $_POST["nameSurname"];
        
        
        $path = "C:/Users/shepherd/Desktop/salla/";
        $FileName = $gelenFiles["name"];
        $FileTmp = $gelenFiles["tmp_name"];
        
        for ($i = 0; $i < count($FileTmp); $i++) {
            move_uploaded_file($FileTmp[$i],($path.$FileName[$i]));
        }
        
        echo "Files are uploaded successfully...";
        echo "<br>Have a nice day {$AdSoyad}";
        
        
        /*echo "<pre>";
        print_r($gelenFiles);
        echo "<pre>";*/
    ?>
	</body>
</html>