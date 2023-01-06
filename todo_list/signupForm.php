
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo - Signup</title>
</head>
<body>
    <?php
        if(isset($_GET['eMessage'])){
            echo $_GET['eMessage'];
        }
    ?>
    <form action="signup.php" method = "post">
        Email : <input type="email" name="userEmail" required><br>
        Password : <input type="text" name="userPassword" required><br>
        Username : <input type="text" name="userName" required><br>
    <input type="submit" value="Signup">
    </form>

    

</body>
</html>