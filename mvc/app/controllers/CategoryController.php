<?php
namespace App\Controllers;

use App\Models\Category;

class CategoryController{

    public function index(){
        return "Danh sách danh mục";
    }

    public function addNew(){

        include_once './app/views/cates/add-new.php';
    }

    public function saveCate(){
        $model = new Category();
        $model->fill($_POST);

        $model->save();
        header('location: ./');
    }

}


?>