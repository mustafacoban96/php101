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
	 * date_default_time_zone_set() 
	 * 
	 * 
	 * 
	 */
	$zaman = date("Y--m.d");
	echo $zaman."<br>";
	echo date("l")."<br>"; // day
	date_default_timezone_set("Etc/GMT-3");
	echo "the time is ".date("h:i:s");
	$d=strtotime("10:30pm April 15 2014");
	echo "<br>Created date is " . date("Y-m-d h:i:sa", $d);
	$d=strtotime("tomorrow");
	echo "<br>".date("Y-m-d h:i:sa", $d) . "<br>";
	
	echo "<pre>";	
	print_r(timezone_identifiers_list(50));
	echo "<pre>";
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    ?>
	</body>
</html>