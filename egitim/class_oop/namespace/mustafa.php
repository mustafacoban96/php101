<?php

namespace Mustafaoz;

class Personal{
    private $job;
    private $name;
    private $surname;


    function __construct($name,$surname,$job)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->job = $job;

    }

    function get_name(){
        return $this->name;
    }
    function get_surname(){
        return $this->surname;
    }
    function get_job(){
        return $this->job;
    }


}





?>