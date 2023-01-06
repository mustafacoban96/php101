
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
	echo $_SESSION["Username"]."<br>";
	echo $_SESSION["Department"]."<br>";
	echo $_SESSION["BirthYear"]."<br>";
	echo $_SESSION["Province"]."<br>";
    ?>
    
    
    <br><a href = "sessionDelete.php">Verileri Sil</a>
	</body>
</html>