<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET["aWarning"])){
        echo $_GET["aWarning"];
    }
    ?>
    <form action="signup.php" method="post">
        Username : <input type="text" name="username" required><br><br>
        Email : <input type="email" name="email" required><br><br>
        Password : <input type="password" name ="password" required><br><br>
        <input type="submit" value="Signup">


    </form>
</body>
</html>