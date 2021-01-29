<?php
namespace App\Controllers;

use App\Models\Category;

class HomeController extends BaseController{

    public function index(){
        $keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : "";
        if($keyword != ""){
            $cates = Category::where("cate_name", "like", "%$keyword%")
                            ->get();
        }else{
            $cates = Category::all();
        }
        
        $cates->load('products');
        $this->render('cate-list', compact('cates'));
    }

    public function loginForm(){
        $this->render('auth.login');
    }
}


?>