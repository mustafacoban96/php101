<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
class Car{

    public const Seller = "Asım";
    private $brand;
    private $color;
    protected $modelNo;

    

    function __construct($brand, $color, $modelNo)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->modelNo = $modelNo;
    }


    function get_brand(){
        return $this->brand;
    }


    function  get_color(){
        return $this->color;
    }

    function get_modelNo(){
        return $this->modelNo;
    }

    


}

$my_car = new Car("Volvo", "black", "299z");

echo $my_car->get_brand();
echo "<br>";
echo $my_car->get_color();
echo "<br>";
echo $my_car->get_modelNo();
echo "<br>";
echo Car::Seller;



?>
    
</body>
</html>