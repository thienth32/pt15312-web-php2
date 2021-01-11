<?php

class DongVat{

    function __construct()
    {
        $this->connect = 
                new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8", 
                            "root", "123456");
    }

    function tiengKeu(){
        echo "Oẳng oẳng";
    }
}

class ConMeo extends DongVat{}
class MeoVietNam extends ConMeo{}
class MeoMienBac extends MeoVietNam{}
class MeoHaNoi extends MeoMienBac{}

$van = new ConMeo();
$van->tiengKeu();


?>