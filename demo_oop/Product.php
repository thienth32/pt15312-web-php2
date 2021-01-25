<?php

require_once 'BaseModel.php';
require_once 'Category.php';

class Product extends BaseModel{
    protected $tableName = 'products';
    public function getCateName(){
        $cate = Category::where(['id', '=', $this->cate_id])->first();
        return $cate->cate_name;
    }
}


?>