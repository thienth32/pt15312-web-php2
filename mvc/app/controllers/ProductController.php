<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\ProductGallery;

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

    public function detail($id){
        
        $product = Product::find($id);
        $product->load('galleries', 'category');

        $relateProducts = Product::where('cate_id', $product->cate_id)
                                ->where('id', '<>', $id)
                                ->orderBy('star', 'desc')
                                ->take(7)
                                ->get();
        $this->render('frontend.detail-product', compact('product', 'relateProducts'));
    }

    public function fakeGallery(){
        $products = Product::all();
        foreach($products as $item){
            $ranImg = rand(4, 6);
            for($i = 0; $i < $ranImg; $i++){
                $model = new ProductGallery();
                $model->product_id = $item->id;
                $model->img_url = 'https://picsum.photos/640/480';
                $model->save();
            }
        }
        return "Success!";
    }

}


?>


<!-- namespace App\Controllers;

class ProductController
{
    public function index()
    {
        return " product home here";
    }
    public function about()
    {
        # code...
        return " about product here";
    }
} -->
