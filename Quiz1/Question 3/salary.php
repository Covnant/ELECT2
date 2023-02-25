<?php


    abstract class salary{
        public $name;
        public $salary;
        public $MonthOfStay;

        public function __construct($name,$salary,$MonthOfStay){
            $this->name=$name;
            $this->salary=$salary;
            $this->MonthOfStay=$MonthOfStay;

        }

        abstract function calculate13Pay();
        abstract function calculateHrPay();
    }

    class Employee extends salary{
        public function calculate13Pay(){
            echo "The 13 Month Pay: ". ($this->salary * $this->MonthOfStay)/12 ."</br>";

        }
        public function calculateHrPay(){
            echo "The Hourly Pay: ".($this->salary/24/8);
        }
    }

    class Manager extends salary{

        public function calculateHrPay(){
            return "The Hourly Pay: ". ($this->salary/24/8);
        }
        public function calculate13Pay(){
            return "";
        }


    }


?>