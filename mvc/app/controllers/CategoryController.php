<?php

namespace App\Controllers;

use App\Models\Category;

class CategoryController
{
    public function index()
    {
        return " danh sách danh mục";
    }
    public function editCate()
    {
        $id = $_GET['id'];
        $model = Category::find($id);
        if ($model) {
            include_once './app/views/cates/edit.php';
        } else {
            header('location: ./');
        }
    }
    public function addNew()
    {
        # code...
        include_once './mvc/app/views/cate/add-new.php';
    }
    public function saveCate()
    {
        $model = new Category();
        $model->fill($_POST);

        $model->save();
        header('location: ./');
    }
}
