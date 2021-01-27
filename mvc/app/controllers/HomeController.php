<?php

namespace App\Controllers;

use App\Models\Category;

class HomeController extends BaseController
{

    public function index()
    {
        $keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : "";
        if ($keyword != "") {
            $cates = Category::where("cate_name", "like", "%$keyword%")->get();
        } else {
            $cates = Category::all();
        }
        $cates->load('products');
        $this->render('cate-list', compact('cates'));
    }

    public function about()
    {
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