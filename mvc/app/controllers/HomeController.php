<?php

namespace App\Controllers;

use App\Models\Category;

class HomeController
{
    public function index()
    {
        $cates = Category::all();
        include_once './mvc/app/views/cate-list.php';
        return " homepage here";
    }
    public function about()
    {
        # code...
        return " about here";
    }
}
