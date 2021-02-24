<?php

use App\Controllers\CategoryController;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
$router = new RouteCollector();

$router->get('/', [HomeController::class, "index"]);
$router->get('/new-cate', [CategoryController::class, "addNew"]);
$router->post('/new-cate', [CategoryController::class, "saveCate"]);


$router->get('/thong-tin-san-pham/{id}', [ProductController::class, "detail"]);
// $router->get('/add', ['Controllers\HomeController', "add"]);
// $router->post('/add', ['Controllers\HomeController', "saveAdd"]);


$dispatcher = new Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
    
// Print out the value returned from the dispatched function
echo $response;

?>