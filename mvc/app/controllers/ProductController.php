<?php
namespace App\Controllers;
use App\Models\Product;
class ProductController extends BaseController{

    public function index(){
        $products = Product::all();
        $products->load('category');
        $this->render('product.index', ['products' => $products]);
    }

}


?>