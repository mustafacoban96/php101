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
	 * try{
	 *     Kod blokları
	 *     throw new Exception(ileti);
	 * }catch(Exception ileti ataması){
	 * Kod blokları
	 * }finally{
	 *     kod blokları
	 * 
	 * }
	 * 
	 * 
	 * 
	 * 
	 * */
	
	
	$v1 = 10;
	$v2 = 0;
	
	
	try {
	    
	    if($v2 == 0){
	        throw new Exception("Hatalı bilgi");
	    }
	    echo "result: " .  $v1 / $v2 ."<br>";
	} catch (Exception $e) {
	    echo $e->getMessage();
	}
	
	echo "<br>";
	$password = "zbcnxw2";
	
	try {
	    if($password == "zbcnxw22"){
	        echo "parola dogru...";
	    }else{
	        throw new Exception("Ynalis parola girdiniz");
	    }
	} catch (Exception $e) {
	    
	    echo $e->getMessage();
	}
	
	
	?>
	
	
	
	</body>
</html>