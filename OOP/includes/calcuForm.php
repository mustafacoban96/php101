
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="displayCalcu.php" method="post">
        number1 : <input type="number" name="number1">
        <select name="operators">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">x</option>
        </select>
        number2 : <input type="number" name="number2"> = <?php if(isset($_GET["result"])): echo $_GET["result"];
        endif;?>
        <br><br>
        <input type="submit" value="Calculate">

    </form>
</body>
</html>