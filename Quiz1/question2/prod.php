<?php
abstract class product{

    protected $ProductName;
    protected $Price;



    public function __construct($Price,$ProductName){
        $this->ProductName = $ProductName;
        $this->Price =$Price;
    }


     protected function Display(): string{
        return "Product Name: ". $this->ProductName. "Price: ". $this->Price;

     }

}

class Movie extends product{

    protected $Director;
    protected $Rating;
    public function __construct($Director,$Rating,$ProductName,$Price){
            parent::__construct($Price,$ProductName);

        $this->Director =$Director;
        $this->Rating =$Rating;


    }
    public function Display(): string{

        return"Product Name: ". $this->ProductName."</br>".
            "Price: ". $this->Price."</br>".
            "Director: ". $this->Director. "</br>".
          "Rating: ".$this-> Rating."</br>";
    }


    
}

class Book extends product{

    protected  $Author;
    protected $Genre;

    public function __construct($Author,$Genre,$ProductName,$Price){
        parent ::__construct($Price,$ProductName);
        $this->Author =$Author;
        $this->Genre =$Genre;


    }

    public function Display(): string{

        return "Product Name: ". $this->ProductName."</br>".
         "Price: ". $this->Price."</br>".
          "Author: ". $this->Author."</br>".
          "Genre: ". $this->Genre."</br>";
    }




}

?>