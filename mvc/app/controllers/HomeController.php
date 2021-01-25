<?php

namespace App\Controllers;

use App\Models\Category;

class HomeController extends BaseController{

    public function index(){
        $cates = Category::all();
        $this->render('cate-list', compact('cates'));
    }

    public function about(){
        return "About page here!";
    }
}


?>
<!-- class HomeController
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
} -->
