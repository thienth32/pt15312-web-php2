<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
// echo $_GET['url'];
require_once './app/controllers/HomeController.php';
require_once './app/controllers/ProductController.php';

use App\Controllers\ProductController;
use App\Controllers\HomeController;

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
    default:
        echo "not found =))))";
        break;
}
