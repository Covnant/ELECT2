<?php
class Products{
    protected $name;
    protected $price;
    protected $weight;
    public function __construct($name,$price,$weight){
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
    }

    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getWeight(){
        return $this->weight;
    }
}


class calculate extends products{


}

?>
