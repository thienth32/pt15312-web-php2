<?php

namespace App\Controllers;

use App\Models\Category;

class HomeController
{
    public function index()
    {
        $cates = Category::all();
        include_once './app/views/cate-list.php';
    }
    public function about()
    {
        # code...
        return " about here";
    }
}
