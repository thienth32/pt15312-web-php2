<?php
namespace App\Controllers;
use App\Models\Product;
class ProductController extends BaseController{

    public function index(){

        $keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : "";
        if($keyword != ""){
            $products = Product::where("name", "like", "%$keyword%")
                            ->get();
        }else{
            $products = Product::all();
        }
        
        $products->load('category');
        $this->render('product.index', ['products' => $products]);
    }

}


?>