<?php
class Yapilacak{
    private $user_id;
    private $post_id;
    private $program;
    public mysqli $db;
    
    public function __construct($user_id){
        $this->user_id = $user_id;
    }
    
    public function getUser_id(){
        return $this->user_id;
    }
    
    public function display(){
        $query = "select * from yapılacak WHERE user_id = '{$this->getUser_id()}' order by post_id desc";
        $execute = mysqli_query($this->db, $query);
        while($row = mysqli_fetch_assoc($execute)){
            $this->post_id = $row["post_id"];
            $this->program = $row["program"];

            echo $this->getUser_id() . "numaralı kullanıcı:" . "<br>";
            echo $this->program . "<br>";
            echo "PostID#" . $this->post_id;
            echo "<br>*********************<br>";
        }
    }
    public function add($info){
        if(!empty($info) || $info != " "){
            $this->program = $info;
            $query = "insert into yapılacak (program,user_id) values ('{$this->program}','{$this->user_id}')";
            $execute = mysqli_query($this->db, $query);
        }
    }

    public function delete($postID){
        if(!empty($postID) || $postID != " "){
            $this->post_id = $postID;
            $query = "delete from yapılacak where post_id = '{$this->post_id}'";
            $execute = mysqli_query($this->db,$query);
        }

    }
    public function update($postID,$info){
        if(!empty($postID) || $postID != " " || !empty($info) || $info != " "){
            $this->post_id = $postID;
            $this->program = $info;
            $query = "update yapılacak set program = '{$this->program}' where post_id='{$this->post_id}'";
            $execute = mysqli_query($this->db, $query);
        }
    }


   
    

}








?>