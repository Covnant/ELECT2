<?php
class user{
    protected $username;
    protected $limit;
    public function __construct($username,$limit){
        $this->username = $username;
        $this->limit = $limit;
}
    public function getUsername(){
        return $this->username;
    }
    public function getLimit(){
        return $this->limit;
    }
}
?>
