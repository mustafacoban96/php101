<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 

class Student{

    protected const SchoolName = "Gaziantep University";
    protected $name ="Ömer";
    protected $surname ="ÇOBAN";

    protected $department = "Computer Engineering";

    public static $city = "Gaziantep";

    /*function __construct($name, $surname, $department)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->department = $department;
    }*/


    public function Yazdir(){
        $Context = "My name is " . $this->name . " " . $this->surname . " and I study " . $this->department . " at " . self::SchoolName;
        echo $Context;
    }

}

//$st1 = new Student();
//$st1->Yazdir();

/////// protected
class subStudent extends Student{

    public function justSchool(){
        echo "I like ". self::SchoolName;
        echo "<br>";
        parent::Yazdir();
        echo "<br>";
        
    }

}

$st2 = new subStudent;
echo subStudent::$city;
echo "<br>";
//$st2->Yazdir();
echo "<br>";
$st2->justSchool();

?>    





</body>
</html>