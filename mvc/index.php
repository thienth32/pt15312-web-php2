<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
// echo $_GET['url'];
// require_once './app/controllers/HomeController.php';
// require_once './app/controllers/ProductController.php';
// require_once './app/models/BaseModel.php';
// require_once './app/models/Category.php';

require_once './vendor/autoload.php';

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
        echo $ctr->about();
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
}
