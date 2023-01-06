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
    
	
	//define("isimler", array("lale", "emir" , "mustafa","derya"));
	
	/*const isimler = array("lale", "emir" , "mustafa","musa");
	
	function Yazdır() {
	    echo "<pre>";
        print_r(isimler);
	    echo "<pre>";
	}
	Yazdır();*/
	
	
	/*//anonim func
	define("isimler", array("lale", "emir" , "mustafa","derya"));
	
	$anonim = function() {
	    echo"<pre>";
	    print_r(isimler);
	    echo"<pre>";
	    ;
	};
	$anonim();*/
	
	//////////////////////////////////////////////////////////////////////
	
	/*
	 * func_num_args() : Fonksiyona gönderilen parametre sayısını bulmak için kullanılır.
	 * func_get_args() : Fonksiyona gönderilen paramtre değerlerini alarak yeni bir dizi oluşturmak için kullanılır.
	 * func_get_arg()  : Fonksiyona gönderilen paramtre değerlerini bir dizi olarak kabul ederek, belirtilecek olan anahtara ait elemanın değerini döndğrmek için kullanılır
	 * 
	 * 
	 * */
	
	/*function Bilgiler(){
	    $GelenParamtreSayisi = func_num_args();
	    
	    echo "parametre sayisi: ".$GelenParamtreSayisi."<br>";
	    
	    $GelenParametreDegerleri = func_get_args();
	    
	    echo "<pre>";
	    print_r($GelenParametreDegerleri);
	    echo "<pre>";
	    
	    $element = func_get_arg(4);
	    echo "element".$element;
	    
	    
	}
	
	Bilgiler("Volkan" ,"ÇOBAN", "Gaziantep", "Bilgisayar programlama ve yazılım geliştirme",26,"Erkek");*/
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	
	
	/*function Doviz($Paraturu, $miktar) {
	    
	    if($Paraturu == "Türk Lirası"){
	        $Kur = 1;
	    }elseif($Paraturu == "Dolar"){
	        $Kur = 18;
	    }elseif($Paraturu == "Euro"){
	        $Kur = 19;
	    }elseif($Paraturu == "Sterlin"){
	        $Kur = 21;
	    }
	    
	    return Hesapla($Kur,$miktar);
	  
	}
	    
	function Hesapla($KurBilgisi, $Miktar){
	    $result = $KurBilgisi * $Miktar;
	    echo "Total Money: " .$result;
	    
	}
	
	Doviz($_GET["paratürü"], $_GET["miktar"]);*/
	
	/////////////////recurisve
	
	
	/*function IslemYap($number) {
	    if($number <=10){
	        echo $number."<br>";
	        IslemYap($number+1);
	    }
	    
	}
	
	IslemYap(1);*/
	
	
	//////////////////yield
	
	/*function Islem($Baslangic, $Bitis){
	    
	    $Sayılar = array();
	    
	    while($Baslangic <= $Bitis){
	        $Sayılar[] = $Baslangic;
	        $Baslangic++;
	    }
	    return $Sayılar;
	}
	
	$Sonuc = Islem(1,1000);
	foreach($Sonuc as $Deger){
	    echo $Deger." ";
	}
	echo "<br/><br />";
	
	$BellekTuketimi = memory_get_usage();
	echo "Islem esnasında tüketilen bellek miktarı : " .$BellekTuketimi." byte";*/
	
	function Islem($Baslangic, $Bitis){
	    
	    
	    
	    while($Baslangic <= $Bitis){
	       yield $Baslangic;
	        $Baslangic++;
	    }
	    
	}
	
	$Sonuc[] = Islem(1,1000);
	
	foreach ($Sonuc as $value) {
	    echo $value." ";
	}
	
	$BellekTuketimi = memory_get_usage();
	echo "Islem esnasında tüketilen bellek miktarı : " .$BellekTuketimi." byte";
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    ?>
	</body>
</html>