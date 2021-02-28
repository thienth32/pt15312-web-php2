<?php
namespace App\Controllers\Frontend;
use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Product;

class HomeController extends BaseController{

    public function index(){
        $trendingProducts = Product::orderBy('star', 'desc')
                                    ->orderBy('id', 'desc')->take(8)->get();
        $trendingProducts->load('category');
        
        $tablistCate = Category::where('show_menu', 1)->get();
        
        $this->render('frontend.homepage', compact('trendingProducts', 'tablistCate'));
    }
}

?>