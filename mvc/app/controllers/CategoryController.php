<?php

namespace App\Controllers;

use App\Models\Category;

class CategoryController
{
    public function index()
    {
        return " danh sách danh mục";
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
