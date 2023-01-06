<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php 
abstract class Personal{
    
    private $name;
    private $surname;
    private $phoneNumber;
    protected $department;


    public function __construct($name, $surname, $phoneNumber){
        $this->name = $name;
        $this->surname = $surname;
        $this->phoneNumber = $phoneNumber;
    }

    

    public function displayInfos(){
        echo "Departman : " . $this -> department."<br>";
        echo "İsim Soyisim : " . $this->name . " " . $this->surname."<br>"."Telefon numarası: ".$this->phoneNumber;
    }

    public abstract function helloDep();


    


}

class Driver extends Personal{

    
 
    public function __construct($name,$surname,$phoneNumber)
    {
        parent::__construct($name, $surname, $phoneNumber);
        $this->department = "Driver";
    }
	/**
	 * @return mixed
	 */
	public function helloDep() {
        echo "Welcome to ".$this->get_department()." department"."<br>";
	}


    public function get_department(){
        return $this->department;
    }
}




$p1 = new Driver("Mustafa", "Çoban", "5076563103");
$p1->helloDep();
$p1->displayInfos();

?>
    
</body>
</html>