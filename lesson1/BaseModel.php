<?php
class BaseModel{
    var $tableName = '';
    function getConnect(){
        $connect = new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8", 
                    "root", "123456");
        return $connect;
    }
    static function getAll(){
        $model = new static();
        $sql = "select * from " . $model->tableName;
        $stmt = $model->getConnect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    static function where($col, $op, $val){
        // $col = tên cột
        // $op = phép so sánh
        // $val = giá trị cần so sánh
        $model = new static();
        $model->query = "select * from " . $model->tableName;
        $model->query .= " where " . $col . " " . $op . " " . $val;
        return $model;
    }
}

class Category extends BaseModel{
    var $tableName = "categories";
    
}
class Product extends BaseModel{
    var $tableName = "products";
    
}
echo "<pre>";
var_dump(Product::where('name', 'like', '%x%'));

?>