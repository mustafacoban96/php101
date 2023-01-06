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
	
	trait KisiOz {
	    
	    private $isim = "Mustafa";
	    function UsernameYaz() {
	        echo "I am shepherd.";
	    }
	    
	    public function get_name() {
	        return $this->isim;
	    }
	}
	
	
	
	
	class Deneme{
	    use KisiOz;
	}
	
	
	$Ornek = new Deneme;
	$Ornek->UsernameYaz();
	echo $Ornek->get_name();
	
	
	
	
	
	
	
	
	
    ?>
	</body>
</html>