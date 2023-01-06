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
	
	$_SESSION["Username"] = "Mustafa";
	$_SESSION["Department"] = "IT";
	$_SESSION["Province"] = "Gaziantep";
	$_SESSION["BirthYear"] = "1996";
	
	
	
	
	
	
	?>
	
	<a href = "routerSession.php">Verileri Goster</a>
	
	</body>
</html>