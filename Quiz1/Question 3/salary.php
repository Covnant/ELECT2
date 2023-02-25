<?php


    abstract class salary{

        abstract function calculate13Pay();
        abstract function calculateHrPay();

        abstract function displayName();
    }

    class Employee extends salary{

        public $name;
        public $salary;
        public $MonthOfStay;

        public function __construct($name,$salary,$MonthOfStay){
            $this->name=$name;
            $this->salary=$salary;
            $this->MonthOfStay=$MonthOfStay;

        }
        public function displayName(){
            return "Name: ". $this->name. "</br>";
        }
        public function calculate13Pay(){
            return "The 13-Month Pay: ". ($this->salary * $this->MonthOfStay)/12 ."</br>";

        }
        public function calculateHrPay(){
            return "The Hourly Pay: ".($this->salary/24/8);
        }
    }

    class Manager extends employee{

        public function displayName(){
           return "Name: ". $this->name. "</br>";
        }
        public function calculateHrPay(){
            return "The Hourly Pay: ". ($this->salary/24/8);
        }
        public function calculate13Pay(){
            return "";
        }


    }


?>