<?php
$url = isset($_GET['url']) == true 
                    ? $_GET['url'] : "/";

require_once './commons/utils.php';
require_once './vendor/autoload.php';
require_once './config/database.php'; 

// composer require illuminate/database
// composer require illuminate/events

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\CategoryController;
switch($url){
    case "/":
        $ctr = new HomeController();
        $ctr->index();
        break;
    case "new-cate":
        $ctr = new CategoryController();
        $ctr->addNew();
        break;
    case "save-cate":
        $ctr = new CategoryController();
        $ctr->saveCate();
        break;
    case "edit-cate":
        $ctr = new CategoryController();
        $ctr->editCate();
        break;
    case "save-edit-cate":
        $ctr = new CategoryController();
        $ctr->saveEdit();
        break;
    case "remove-cate":
        $ctr = new CategoryController();
        $ctr->removeCate();
        break;
    default:
        echo "Not found!";
        break;
}

?>


$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
// echo $_GET['url'];
// require_once './app/controllers/HomeController.php';
// require_once './app/controllers/ProductController.php';
// require_once './app/models/BaseModel.php';
// require_once './app/models/Category.php';


<!-- require_once './commons/uitls.php';
require_once './vendor/autoload.php';
require_once './config/database.php';

use App\Controllers\ProductController;
use App\Controllers\HomeController;
use App\Controllers\CategoryController;

switch ($url) {
    case "/":
        $ctr = new HomeController();
        echo $ctr->index();
        break;
    case "about":
        $ctr = new HomeController();
        echo $ctr->about();
        break;
    case "chi-tiet":
        $ctr = new ProductController();
        echo $ctr->detail();
        break;
    case "new-cate":
        $ctr = new CategoryController();
        echo $ctr->addNew();
        break;
    case "save-cate":
        $ctr = new CategoryController();
        echo $ctr->saveCate();
        break;
    default:
        echo "not found =))))";
        break;
} -->
