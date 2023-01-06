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
     * count() : length
     * sizeof() : length
     * COUNT_RECURSİVE : Çok boyutlu dizilerde , tüm boyutlar içideki elemanlarda sayma işlemine dahil edilir.*/
	
	/*$isimler = array("mustafa","musa" , "ömer",array("lale", "emine","jülide"));
	
	echo "<pre>";
	print_r($isimler);
	
	echo "</pre>";
	echo "<br /><br />";
	
	$Dizinsayısı = count($isimler);
	//$Dizinsayısı = count($isimler, COUNT_RECURSIVE);
	
	echo "eleman sayısı : " . $Dizinsayısı . "<br/>";*/
	
	/*
	 * array_unshift() : array basına eleman ekler. uzunluk döner
	 * array_push() : array sonuna ekler. uzunluk döner
	 * array_shift() : arrayin başından eleman siler. uzunluk döner
	 * array_pop() : arrayin sonunda siler. uzunluk döner
	 * key() : dizinin göstericisi olarak elemanmın anahtarını bulmak içi kullanılır.
	 * current() ve pos() : göstericinin elemanını gösterir.
	 * end() : array göstericisinin son konumundaki eleamnı bize verir.
	 * next() , prev() , reset() : arrayin gösterici işlemleridir.
	 * 
	 * 
	 * ******explode() : düz bir metni belitilecek olan ayraca göre parçalayarak bir dizi oluşturur.******
	 * implode tam tersi
	 * 
	 * list() : liste içindeki elemanları değişkene aktarır.
	 * 
	 * 
	 * 
	 * array_merge
	 * array_merge_recursive
	 * 
	 * 
	 * */
	
	
	/*$isimler = array(array("lale", "koton","defacto"),"zara" => "mustafa" , "ebru" , "emir");
	
	echo "<pre>";
	print_r($isimler);
	echo "<pre>"."<br>";*/
	
	
	/*array_unshift($isimler,"lale");
	
	echo "<pre>";
	print_r($isimler);
	echo "<pre>"."<br>";

	array_push($isimler, "elif");
	
	echo "<pre>";
	print_r($isimler);
	echo "<pre>"."<br>";*/
	
	/*$uzunluk = array_unshift($isimler);
	echo $uzunluk;
	
	echo "<pre>";
	echo key($isimler);
	echo "<pre>"."<br>";
	
	echo end($isimler);*/
	
	$metin = "asdkasdşsa aşsdjkasşodjapsojd asdk asdklapjk";
	
	$Sonuc = explode(" " , $metin);
	
	echo "<pre>";
	print_r($Sonuc);
	echo "<pre>";
	
	list($bir,$iki, , $uç) = $Sonuc;
	
	echo $bir."<br>";
	echo $iki."<br>";
	echo $uç."<br>";
	
	
	// array_combine : dizilerin birinin elemanlarını (ilk liste)key diğer diziyide bu keylere eleamn yapar. elemanları ilişkilendirir.
	
	
	
	
	
	
	
    ?>
	</body>
</html>