<?php include "calculate.class.php"?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num1 = $_POST["number1"];
        $num2 = $_POST["number2"];
        $operator = $_POST["operators"];

        $cal1 = new CalMac($operator, $num1, $num2);
        $sonuc = $cal1->calcu();

        Header("Location:calcuForm.php?result=".urlencode($sonuc));
          
    ?>
</body>
</html>