<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    if(isset($_GET["hataliGiris"])){
        echo $_GET["hataliGiris"];
    }
    ?>
    <form action="login.php" method="post">
        Email : <input type="email" name="email" required><br><br>
        Password : <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
   <a href="signupForm.php">Kayıt ol</a>
</body>
</html>