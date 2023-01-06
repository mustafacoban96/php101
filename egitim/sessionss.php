

<?php 

session_start();


?>

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
	 *session_start()
	 *session_destroy()
	 **/
	
	$_SESSION["Username"] = "shepherd"."<br>";
	$_SESSION["Phone Number"] = "5465465464"."<br>";
	$_SESSION["Department"] = "compe"."<br>";
	$_SESSION["province"] = "gaziantep"."<br>";
	$_SESSION["Father"] = "aydin"."<br>";
	
	
	echo "<pre>";
	print_r($_SESSION);
	echo "<pre>";
	
	
	
	
	
	
	
    ?>
	</body>
</html>