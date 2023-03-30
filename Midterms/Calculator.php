<?php

abstract class calculator{

    abstract function multiplication($val1,$val2);
    abstract function addition($val1,$val2);
    abstract function subtraction($val1,$val2);
    abstract function division($val1,$val2);
}


 class arithmetic extends calculator {


    public function multiplication($val1, $val2)
    {
        return $val1 * $val2;
    }
     public function addition($val1, $val2)
     {
         return $val1 + $val2;
     }
     public function subtraction($val1, $val2)
     {
         return $val1 - $val2;
     }
     public function division($val1, $val2)
     {
         return $val1 / $val2;
     }
 }