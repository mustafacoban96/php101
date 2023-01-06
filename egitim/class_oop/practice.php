<!DOCTYPE html>
<html lang ="tr-TR">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
</head>
<body>
    
<?php

class Fruit{
    public $name;
    public $color;
    /** 
     * that using a constructor saves us from calling the set_name() method which reduces the amount of code:
     * 
     * 
     * 
     * 
     * 
    */
     
    function __construct($name , $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct()
    {
        echo "The fruit is {$this->name}.<br>";
    }



    /*function set_name($name){
        $this->name = $name;
    }*/

    function get_name(){
        return $this->name;
    }

    /*function set_color($color){
        $this->color = $color;
    }*/

    function get_color(){
        return $this->color;
    }
}
$apple = new Fruit("apple","red");
$banana = new Fruit("banana","yellow");

//echo $apple->get_name() . " " . $apple->get_color()."<br>";
//echo $banana->get_name() . " " .$banana->get_color();


/*$apple->set_color("red");
$apple->set_name("apple");
$banana->set_name("banana");
$banana->set_color("yellow");*/

/*echo "1.Fruit : ";
echo $apple->get_name();
echo " ";
echo $apple->get_color();
echo "<br>";
echo "2.Fruit: ";
echo $banana->get_name()." ";
echo $banana->get_color();*/

/*echo "<pre>";
print_r(var_dump($apple instanceof Fruit));
echo "<pre>";*/






















?>





</body>
</html>
