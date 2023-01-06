<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class Baba{
        protected $name;
        private  $surname;
        private $age;

        public function __construct($name , $surname, $age){
                $this -> name =  $name;
                $this -> surname = $surname;
                $this -> age = $age;
        }


        public function bilgiYaz(){

            $context = "Bilgiler : " . $this->name . " " . $this->surname . " " . $this->age . " yaşındadır. ";

            return $context;

        }

    }

    class Cocuk extends Baba{

        public function display(){
            parent::bilgiYaz();

            echo "Benim adım :" . $this->name;
        }
        

    }


    $c1 = new Cocuk("Mustafa","ÇOBAN",25);
    
    $info = $c1->bilgiYaz();
    echo $info."<br>";
    $c1->display();
    
    
    
    
    ?>
</body>
</html>