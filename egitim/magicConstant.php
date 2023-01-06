<?php 
namespace SayfaBasıIsimUzayi;

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
	
	echo "İlgili koudn satır bilgisi __LINE__:".__LINE__."<br/>";
	echo "Calıstırılan php dosyasının dizinin verir __DIR__ : ".__DIR__."<br/>";
	echo "__FILE__ : dosya adınında verir".__FILE__."<br/>";
	
	function funcMus(){
	    echo "ilgili fonk adını verir __FUNCTİON__".__FUNCTION__."<br>";
	}
	funcMus();
	
	
	trait OzellikBir{
	    function func1(){
	        echo"__TRAIT__:".__TRAIT__;
	    }
	}
	
	trait Ozellik2 {
	    function func2() {
	        echo "__TRAIT__".__TRAIT__;
	    }
	}
	
	
	class Deger{
	    function deneme() {
	        echo "Sınıf adı __CLASS__: ".__CLASS__."<br>";
	        echo "method adı __METHOD__:".__METHOD__;
	        
	    }
	    use OzellikBir;
	    use Ozellik2;
	}
	
	$islem = new Deger();
	$islem->Deneme();
	echo "<br>";
	$islem->func1();
	
	echo "<br/>";
	echo __NAMESPACE__;
	
	
	?>
	</body>
</html>