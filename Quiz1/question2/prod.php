<?php
class product{

    public $ProductName;
    public $Price;

    public function __construct($ProductName,$Price){
        $this->ProductName =$ProductName;
        $this->Price =$Price;

    }


    public function Display(){

    }
}

class Movie extends product{
    public $Director;
    public $Rating;

    public function __construct($Director,$Rating){
        $this->ProductName =$Director;
        $this->Price =$Rating;

    }
}

class Book extends product{
    public $Author;
    public $Genre;

    public function __construct($Author,$Genre){
        $this->ProductName =$Author;
        $this->Price =$Genre;

    }
}

?>