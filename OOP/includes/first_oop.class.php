<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    class Person{
        protected $name;
        private $surname;
        private $number;

        public static $numPerson = 0;

        public function __construct($name, $surname, $number)
        {
            $this->name = $name;
            $this->surname = $surname;
            $this->number = $number;
            self::$numPerson++;
        }

        protected function getName(){
            return $this->name;
        }

        public function getSurname(){
            return $this->surname;
        }
        public function getNumber(){
            return $this->number;
        }

        public static function kayitNumara(){
            return self::$numPerson;
        }


        
    }



    class Student extends Person{
        

        public static $StudentNumber = 0;
        public function __construct($name,$surname,$number){
            parent::__construct($name,$surname,$number);
            self::$StudentNumber++;
        }
        
            
        
        
        public function getName(){
            return $this->name;
        }
        
        public static function kayitlar(){
            return self::$StudentNumber;
        }



    }



    
    
    
    
    
    ?>
</body>
</html>