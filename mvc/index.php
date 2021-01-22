<?php
$url = isset($_GET['url']) == true 
                    ? $_GET['url'] : "/";
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
        echo $ctr->index();
        break;
    case "new-cate":
        $ctr = new CategoryController();
        echo $ctr->addNew();
        break;
    case "save-cate":
        $ctr = new CategoryController();
        echo $ctr->saveCate();
        break;
    case "edit-cate":
        $ctr = new CategoryController();
        echo $ctr->editCate();
        break;
    case "save-edit-cate":
        $ctr = new CategoryController();
        echo $ctr->saveEdit();
        break;
    case "remove-cate":
        $ctr = new CategoryController();
        echo $ctr->removeCate();
        break;
    default:
        echo "Not found!";
        break;
}

?>