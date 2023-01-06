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
    /*$Ornek = "Mustafa";
    echo "Beninm adım $Ornek";
    
    echo "Mustafa", "bir", "Mühendistir.";
    
    print("GAVŞAK");
    print "Laleli";
    $name = "Mustafa";
    $surname = "Coban";
    
    echo "<br/>";
    
    echo "Benim adım {$name} {$surname}";
    
    print("<br /><br/>");
    $Deger1 = "kmaile";
    print($Deger1);*/
	
	
	/* pointer
	$Deger1 = "Mustafa";
	$Deger2 = &$Deger1;
	
	
	echo $Deger1;
	echo "<br/>";
	echo $Deger2;
	echo "<br/>";
	
	$Deger1 = "coban";
	
	echo "Yeni deger2:",$Deger2;
	*/
	////////////
	
	/*
	$Deger1 = "Volkan";
	$$Deger1 = "Demirel";
	
	echo $Deger1;
	echo "<br/><br/>";
	echo $Volkan;
	
	// Volkan
	//
	//Demirel
	
	$tamIsim = $Volkan.$Deger1;
	
	
	echo "<br/><br/>";
	echo $tamIsim;
	*/
	
	
	////Slicing
	
	
	//$name = "Mustafa";
	
	//echo $name[3];
	
	
	/// Super globals
	/*
	 * $_GLOBAL[] : atancak değişkenini etki alanınnın değişmesini sağlar. local değere globalden , global değere 
	 * localden ulaşılmasını sağlar.
	 * $_SERVER[] : 
	 * $_GET[]
	 * $_POST[]
	 * $_REQUEST[]
	 * $_FILES[]
	 * $_COOKIE[]
	 * $_SESSION[]
	 */
	
	
	/////GLOBALS
	/*$GLOBALS["isim"] = "emir";
	
	function read(){
	    //echo $isim == global alandaki değere buradan ulaşamayız.;
	    echo $GLOBALS["isim"];
	}
	read();
	
	
	
	
	
	
	function yaz() {
	    //$isim = "mustafa" ==> we can't reach it from global;
	    
	    $GLOBALS["isim"] = "mustafa";
	    
	    $GLOBALS["surname"] = "coban";
	}
	yaz();
	
	echo $isim. "<br/>";
	echo $surname;*/
	
	/////$SERVER
	
	/*echo $_SERVER["PHP_SELF"];
	
	echo "<br/>";
	echo $_SERVER["SERVER_ADDR"],"<br/>"; // ::1 ,local hostta çalıştırdığımızda bir ip adresi vermez.
	echo $_SERVER["SERVER_SOFTWARE"],"<br/>";
	echo $_SERVER["HTTP_HOST"],"<br/>"; // localhost
	echo $_SERVER["HTTP_CONNECTION"]."<br/>";
	echo $_SERVER["SERVER_NAME"]."<br/>"; // htpd.conf un içinde apachedeki.
	echo $_SERVER["HTTP_ACCEPT_ENCODING"]."<br/>";
	echo $_SERVER["REQUEST_METHOD"]."<br/>";
	echo $_SERVER["QUERY_STRING"]."boş"."<br/>" ;// sorguları gösterir.
	echo $_SERVER["HTTP_USER_AGENT"]."<br/>"; // BROWSER ÖZELLİKLERİ
	echo $_SERVER["REMOTE_HOST"]."<br/>";  // pc adını verir
	echo $_SERVER["REMOTE_PORT"]."<br/>";
	echo $_SERVER["SERVER_ADMIN"]."<br/>";
	echo $_SERVER["SERVER_PORT"]."<br/>";*/
	
	/*echo "<pre>";
	print_r($_SERVER); // butun bilgileri yazdırır server hakkında.
	echo "<pre>";*/
	
	
	//////////$_GET[]
	// form olusturduk  superGlobal.php de.
	
	 
	
	//$gelen_isim = $_GET["isim"];
	//$gelen_soyisim = $_GET["soyisim"];
	
	//echo $gelen_isim." ". $gelen_soyisim;
	
	
	
	
	///// $_POST[]
    /*
     * form olsuturduk postMethod.php de.
     * Post metodu formdaki verileri hiç bir yerde göstermeden direkt verilerin kullanılacağı sayfaya gizli olarak göndermektedir. 
     * Post metodu daha güvenlidir. Veriler gönderilirken form üzerinden gönderilmektedir. 
     * Veriler çekilirken $_POST['etiket_name'] kullanılarak çekilmektedir.
     * name="ad">
     */
    
	//$gelen_ad = $_POST["ad"];
	//$gelen_soyad = $_POST["soyad"];
	
	//echo $gelen_ad." ".$gelen_soyad;
	
	/*//////// $_REQUEST[]
	$gelen_ad = $_REQUEST["ad"];
	$gelen_soyad = $_REQUEST["soyad"];
	echo $gelen_ad.$gelen_soyad;
	/////
	echo "<br/>";
    $gelen_ad1 = $_REQUEST["isim"];
	$gelen_soyad1 = $_REQUEST["soyisim"];
	echo $gelen_ad1.$gelen_soyad1;*/
	
	////////////// $_FILES
	
	/*$gelen_dosya = $_FILES["Dosya"]; // bu array olarak çıkt verir bu yüzden print_r() kullanılır yazdırmak için
	
	echo "<pre>";
	print_r($gelen_dosya);
	echo "<pre>";
	
	echo "Gelen dosyanın Adı : " . $_FILES["Dosya"]["name"]."<br>";
	echo "dosyanın mime tipi : " .$_FILES["Dosya"]["type"]."<br>";
	echo "dosyanın temp dizin : ". $_FILES["Dosya"]["tmp_name"]."<br>";*/
	
	
	///////////$_COOKİE
	
	// çerez adi, içerik.
	/*setcookie("Mustafa" , "Coban Emir"); // cookie mustafa dger = emir coban
	setcookie("Lale" , "çiçek");
	
	$cookie = $_COOKIE["Mustafa"]."<br>";
	$cookie2 = $_COOKIE["Lale"]."<br>";
	
	echo $cookie;
	echo $cookie2;*/
	
	
	///////// $_SESSION
	// Oturum açar ve oturu mverilerine ulaştırır.
	/* HTML kodlarının en başına bunu yazıp session nu başlatıyoruz.
	 * <?php

    session_start();
	?>
	 * 
	 * 
	 * */
	
    $_SESSION["Oturum1"] = "Mustafa ÇOBAN";	
	
    echo "Mustafa Çoban adıyla sessionun deger : ".$_SESSION["Oturum1"];
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    
    ?>
	</body>
</html>