<?php
class User{
    public $id;
    private $username;
    private $email;
    private $password;
    public mysqli $db;

    public function __construct($username=null,$email=null,$password)
    {
        if($username != null)
            $this->username = $username;
        if($email != null)
            $this->email = $email;
        $this->password = $password;
       
    }


    public function getUsername(){
        return $this->username;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getDb(){
        return $this->db;
    }

    


    public function db_queries($query){
        $execute = mysqli_query($this->getDb(),$query);
        $row = mysqli_fetch_assoc($execute);
        return $row;
    }

    

    public function signup(): string{
        // return boolean
        $status = array("kayit"=>true,"hata" =>false);
        $verify = "select email from userinfo where email ='{$this->getEmail()}'";
        $result = $this->db_queries($verify);
        if(empty($result)){
            $query = "insert into userinfo (username, email, password) values ('{$this->getUsername()}','{$this->getEmail()}','{$this->getPassword()}')";
            $execute = mysqli_query($this->getDb(),$query);
            return $status["kayit"];
        }
        
            return $status["hata"];
        
    }
    
    public function login(){
        // return integer
        $status = array("hata" => -1, "status"=>false,"mesaj"=>null, "data" =>[]);
        $query = "select id from userinfo where email='{$this->getEmail()}' && password = '{$this->getPassword()}'";
        $result = self::db_queries($query); // id numarası çektim.
        //$execute = mysqli_query($this->getDb(), $query);
        //$row = mysqli_fetch_assoc($execute); // buradaki row id numarası dönüyor.

        if($result["id"] > 0){
            $_SESSION["user_id"] = $result["id"];
            $this->id = $_SESSION["user_id"]; // id numarası atadım. 
            $status["status"] = true;
            $status["data"]["id"] = $_SESSION["user_id"];
            return $status; // hangi kullanıcı oturum açtıysa onun session id sini return ettim display da kullanmak için.
        }
        else{
            $status["mesaj"] = "Kayıt yok";
            return $status;
        }

    }
}



?>