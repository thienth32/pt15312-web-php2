<?php

class Cha{
    public $name = 'FPT Poly';
    protected $salary = 10000000;
    private $bankAccount = "0002";
    public function getBankAccount(){
        return $this->bankAccount;
    }
}

class Con extends Cha{
    public function getSalary(){
        return $this->salary;
    }

    public function setSalary($newSalary){
        $this->salary = $newSalary;
    }

    
}

$trung = new Con();

var_dump($trung);



?>