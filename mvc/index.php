<?php
$url = isset($_GET['url']) == true 
                    ? $_GET['url'] : "/";

require_once './app/controllers/HomeController.php';
require_once './app/controllers/ProductController.php';
require_once './app/models/BaseModel.php';

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