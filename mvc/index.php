<?php
$url = isset($_GET['url']) == true 
                    ? $_GET['url'] : "/";

require_once './commons/utils.php';
require_once './vendor/autoload.php';
require_once './config/database.php'; 


// use DebugBar\StandardDebugBar;

// $debugbar = new StandardDebugBar();
// $debugbarRenderer = $debugbar->getJavascriptRenderer();

// $debugbar["messages"]->addMessage("hello world!");
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
    case "san-pham":
        $ctr = new ProductController();
        $ctr->index();
        break;
    default:
        echo "Not found!";
        break;
}

?>