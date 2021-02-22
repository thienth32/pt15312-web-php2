<?php
namespace App\Controllers;
use App\Models\Product;
class ProductController extends BaseController{

    public function index(){
        $pagenumber = isset($_GET['page']) == true ? $_GET['page'] : 1;
        $pagesize = isset($_GET['size']) == true ? $_GET['size'] : 20;
        $offset = ($pagenumber-1)*$pagesize;

        $keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : "";
        if($keyword != ""){
            $products = Product::where("name", "like", "%$keyword%")
                        ->take($pagesize)
                        ->skip($offset)
                        ->get();
            $totalPage = intval(ceil(Product::where("name", "like", "%$keyword%")->count()/$pagesize));
        }else{
            $products = Product::take($pagesize)
                            ->skip($offset)
                            ->get();
            $totalPage = intval(ceil(Product::count()/$pagesize));
        }
        
        
        $products->load('category');
        $this->render('product.index', [
                                            'products' => $products, 
                                            'totalPage' => $totalPage, 
                                            'offset' => $offset,
                                            'keyword' => $keyword
                                        ]);
    }

    public function apiProducts(){
        $products = Product::all();
        echo json_encode($products);
    }

    public function detail(){
        $id = $_GET['id'];
        $product = Product::find($id);
        $product->load('category', 'galleries');
        dd($product);
    }

}


?>