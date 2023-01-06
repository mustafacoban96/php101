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
	if(!$_GET){
	    
	?>
	<form action="TeksayfaForm.php" method = "get">
	İsim Soyisim : <input type = "text" name ="nameSurname"><br>
	Cinsiyet : <input type = "radio" name ="Cinsiyet" value = "Erkek"> Erkek <input type = "radio" name ="Cinsiyet" value = "Kadın"> Kadın <br>
	E-mail : <input type = "email" name= "mail"><br>
	Telefon : <input type ="text" name = "phone"><br>
	Department : <input type="text" name = "department"><br>
	
	Sınıf : <select name = "Sınıf"><br>
		<br><option value = "hazırlık">hazırlık</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
	</select>
	<br>
	Hobiler : 
	<br>
	<input type = "checkbox" name="Hobbies[]" value = "Futbol"> Futbol <br>
	<input type = "checkbox" name = "Hobbies[]" value = "Basketbol"> Basketbol <br>
	<input type = "checkbox" name = "Hobbies[]" value = "Müzik"> Müzik <br>
	<input type = "checkbox" name = "Hobbies[]" value = "Sinema"> Sinema <br>
	<input type = "checkbox" name = "Hobbies[]" value = "Tiyatro"> Tiyatro<br>
	
	Yetkinlikler : <textarea name = "mesaj"></textarea><br>
	
	<input type = "submit" value = "Gonder">
	
	 <?php 
	}else{
	    $AdSoyad = $_GET["nameSurname"];
	    $Cinsiyet = $_GET["Cinsiyet"];
	    $Email = $_GET["mail"];
	    $Phone = $_GET["phone"];
	    $Department = $_GET["department"];
	    $Hobiler = $_GET["Hobbies"];
	    $Sınıf = $_GET["Sınıf"];
	    
	    $PersonalInf = array($AdSoyad,$Cinsiyet,$Email,$Phone,$Department,$Sınıf);
	    /*echo "<pre>";
	    print_r($Hobiler);
	    echo "<pre>";*/
	    echo "****************Personal Information******************************<br>";
	    
	    foreach ($PersonalInf as $value) {
	        echo $value."<br>";
	    }
	    /*echo $AdSoyad."<br>";
	    echo $Cinsiyet."<br>";
	    echo $Email."<br>";
	    echo $Phone."<br>";
	    echo $Department."<br>";
	    echo $Sınıf."<br>";*/
	        
	    
	    
	    
	    echo "*******************Hobiler***********************"."<br>";
	    
	    foreach ($Hobiler as $value) {
	        echo $value."<br>";
	    }
    }
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	
	 
	 
	 
	 ?>
	
	
	
	
	
	
	
	</form>
	</body>
</html>