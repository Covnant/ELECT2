<?php

abstract class shapes
{
    abstract function vol();
    abstract function area();

}

class square extends shapes{

    protected $length;

    public function __construct($length){
        $this->length = $length;
    }

    public function vol(){
        return 6 * pow($this ->length, 2);
    }
    public function area(){
        return pow($this ->length, 3);
    }
}

class circle extends shapes{
    protected $rad;

    public function __construct($rad){
        $this->rad = $rad;
    }

    public function vol(){
        return 4 * 3.14 * pow($this ->rad, 2);
    }
    public function area(){
        return 4/3 * 3.14 * pow($this->rad, 3);
    }
}