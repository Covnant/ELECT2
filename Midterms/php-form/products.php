<?php
class Products{
    protected $name;
    protected $price;

    public function __construct($name,$price){
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
}
class user{
    protected $username;

    public function getUsername(){
        return $this->username;
    }
}

class calculate extends products{


}

?>
