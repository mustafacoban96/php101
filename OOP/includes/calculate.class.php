<?php

class CalMac{
    private $operator;
    private $number1;
    private $number2;



    public function __construct($operator,$number1,$number2)
    {
        $this->operator = $operator;
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    /*public function getNum1(){
        return $this->number1;
    }

    public function getNum2(){
        return $this->number2;
    }

    public function getOperator(){
        return $this->operator;
    }*/

    public function calcu(){
        $result = 0;
        if($this->operator == "+"){
            $result = $this->number1 + $this->number2;
            return $result;
        }
        elseif($this->operator == "-"){
            $result = $this->number1 - $this->number2;
            return $result;
        }
        elseif($this->operator == "*"){
            $result = $this->number1 * $this->number2;
            return $result;
        }
        else{
            if($this->number2 == 0){
                return "Bölen sıfır olamaz...";
            }
            else{
                $result = $this->number1 / $this->number2;
                return $result;
            }
        }
    }


}





?>