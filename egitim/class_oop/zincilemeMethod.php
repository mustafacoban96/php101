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
	class Bicimlendir{
	    public $Yazi;
	    public $Stil;
	    
	    public function Metin($MetinDegeri){
	        $this->Yazi = $MetinDegeri;
	        return $this;
	    }
	    
	    public function Renk($RenkDegeri) {
	        $this -> Stil = "color:".$RenkDegeri."; ";
	        return $this;
	        
	    }
	    
	    public function Boyut($BoyutDegeri){
	        $this -> Stil .= "font-size: ".$BoyutDegeri."; "; 
	        return $this;
	    }
	    
	    public function Olustur() {
	        return "<div style='".$this->Stil."'>" . $this->Yazi."</div>";
	    }
	}
	
	$Sonuc = new Bicimlendir;
	/*$Sonuc->Metin("Mustafa ÇOBAN");
	$Sonuc->Renk("blue");
	$Sonuc->Boyut("20px");
	echo $Sonuc->Olustur();*/
	echo $Sonuc ->Metin("Mustafa Çoban")->Renk("red")->Boyut("20px")->Olustur(); // zin 
	
    ?>
    <br></br>
    
	</body>
</html>