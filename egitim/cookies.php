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
     * setcookie() : 
     *  1. cookie name, 2.cookie value(içerik), 3. cookie life cycle. 
     *  
     *  
     *  
     * 
     * 
     * */
	$zaman = time() + 10;
	setcookie("Username", "Shepherd");
	setcookie("gömlek", "Beyaz gömlek");
	setcookie("student_number" , "201501012",$zaman);
	
	
	$zaman = date_default_timezone_set('Europe/Istanbul');
	echo date("t/m/d h:i:s" , $zaman)."<br>";
	
	setlocale(LC_TIME, "turkish"); //başka bir dil içinse burada belirteceksin.
	setlocale(LC_ALL,'turkish'); //başka bir dil içinse burada belirteceksin.
	echo iconv('latin5','utf-8',strftime(' %d %B %Y %A ',strtotime('2017-08-15 23:12:10')));
	
	echo "<pre>";
    //print_r($_COOKIE);
	print_r(timezone_identifiers_list());
	echo "<pre>";
	echo  "<br>";
	
	
	
	
	
	//echo date("h:i:s" , $timezone);
	
	
	
	
    ?>
	</body>
</html>