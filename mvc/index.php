<?php
$url = isset($_GET['url']) == true 
                    ? $_GET['url'] : "/";
require_once './vendor/autoload.php';
require_once './config/database.php'; 
// composer require illuminate/database
// composer require illuminate/events

use App\Controllers\HomeController;
use App\Controllers\ProductController;
switch($url){
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
    default:
        echo "Not found!";
        break;
}

?>