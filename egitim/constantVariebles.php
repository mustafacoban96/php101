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
	// define(name, value, case-insensitive)
	//define("NAME","Mustafa ÇOBAN",true);
	//echo NAMe."<br/>";
	
	const surname = "Azeri";
	
	function yazdir(){
	   define("name", "elif");
	   echo surname."<br/>";
	   // const ile localde tanımlarsak globalden erişemeyiz ama define ile tanımlarsak local de erişebiliriz.
	   
	}
	
	yazdir();
	echo name."<br/>";
	echo 0 == 0;
	echo surname[2];
	
	
	?>
	</body>
</html>