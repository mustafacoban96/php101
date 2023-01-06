
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo - App</title>
</head>
<body>
    <?php

    
        if(isset($_GET['erMessage'])){
            echo $_GET['erMessage'];
        }

        if(isset($_GET["aMessage"])){
        echo $_GET["aMessage"];
        }

    
    ?>
    
    <form action="login.php" method="post">
        Email : <input type="email" name="userEmail" required><br>
        Password : <input type="password" name="userPassword" required><br>
        <input type="submit" value="Login">
    </form>

    <form action="signupForm.php" method="post">
        <a href="signupForm.php">Kaydol</a>
    </form>
</body>
</html>