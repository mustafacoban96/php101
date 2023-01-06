
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    

    include "includes/first_oop.class.php";

    $p2 = new Student("Mustafa", "coban", "201501012");
    $p1 = new Person("Emir", "aslan", "12312313");
    $s3 = new Student("ahmet", "lale", "23234334");
    /*echo "my name is ".$p2->getName()." ".$p2->getSurname()."<br>";
    echo "number: " . $p2->getNumber();*/


    echo "record number: ".Person::kayitNumara();
    echo "<br>";
    echo "student kayit: " . Student::kayitNumara();

    echo "<br>*************************<br>";
    echo "kişi sayisi :".Student::kayitlar();
    
    
    ?>
</body>
</html>