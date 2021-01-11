<?php
class BaseModel{
    var $tableName = '';
    function getConnect(){
        $connect = new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8", 
                    "root", "123456");
        return $connect;
    }
    function getAll(){
        $sql = "select * from " . $this->tableName;
        $stmt = $this->getConnect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

class Category extends BaseModel{
    var $tableName = "categories";
    
}

class Product extends BaseModel{
    var $tableName = "products";
    function getAll(){
        $sql = "select * from " . $this->tableName;
        $stmt = $this->getConnect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

echo "<pre>";
$cateObj = new Product();
var_dump($cateObj->getAll());

?>