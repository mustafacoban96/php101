<!DOCTYPE html>
<html lang ="tr-TR">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">

<title>Egitim</title>
</head>
	<body>
	
	<form action = "Form.php" methods = "get">
	İsim Soyisim : <input type = "text" name = "adSoyad"><br>
	E-mail : <input type = "email" name = "e-mail"><br>
	Telefon : <input type = "text" name = "Telefon"><br>
	Cinsiyet : <input type ="radio" name = "Cinsiyet" value="Erkek"> Erkek <input type = "radio" name = "Cinsiyet" value="Kadın"> Kadın
	<br>
	Yaşınız : <select name="Yaş">
	<br>
	<option value ="">""</option>
	<option value="30">30</option>
	<option value="31">31</option>
	<option value="32">32</option>
	<option value="33">33</option>
	<option value="34">34</option>
	
	
	<br></select>
	
	<input type = "submit" value = "Gonder">
	
	
	
	
	</form>
	</body>
</html>