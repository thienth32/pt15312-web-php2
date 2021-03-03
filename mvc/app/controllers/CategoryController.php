<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;


class CategoryController extends BaseController{

    public function editCate(){
        $id = $_GET['id'];
        $model = Category::find($id);
        if($model){
            include_once './app/views/cates/edit.php';
        }else {
            header('location: ./');
        }
    }

    public function addNew(){
        $this->render('cates.add-new');
    }

    public function saveCate(){
        $model = new Category();
        $model->fill($_POST);

        $model->save();
        header('location: ./');
    }

    public function saveEdit(){
        $id = $_GET['id'];
        $model = Category::find($id);
        if(!$model){
            header('location: ./');
            die;
        }

        $model->fill($_POST);
        $model->save();
        header('location: ./');
    }

    public function removeCate(){
        $id = $_GET['id'];
        $model = Category::find($id);
        if(!$model){
            header('location: ./');
            die;
        }
        Product::where('cate_id', $id)->delete();
        $model->delete();
        header('location: ./');
    }
    public function checkNameExisted(){
        
        $name = $_POST['cate_name'];
        $count = Category::where('cate_name', $name)->count();
        echo json_encode($count <= 0);
        die;
    }

}


?>