<?php

class Cha{
    protected $name = "thienth";
    public function getName(){
        return $this->name;
    }
    
}

class Con extends Cha{
    public $name = 'han';
    public function getName(){
        return $this->name;
    }

    public function getParentName(){
        return Parent::getName();
    }
}

$trung = new Con();
// $trung->name = "han";
var_dump($trung->getParentName());



?>