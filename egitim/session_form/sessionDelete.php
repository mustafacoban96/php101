

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
    session_destroy();
    echo "sessions were erased...";
	
    ?>
    
    <br><a href = "sessionCreate.php">Verileri Olustur</a>
	</body>
</html>