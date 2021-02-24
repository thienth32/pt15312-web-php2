<?php

use App\Controllers\CategoryController;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
$router = new RouteCollector();

# định nghĩa filter
$router->filter('auth', function(){    
    if(!isset($_SESSION[AUTH]) || empty($_SESSION[AUTH])){
        header('location: ' . BASE_URL . 'login');
        die;
    }
});

# kết thúc định nghĩa filter
$router->group(['prefix' => 'admin'], function($router){
    $router->get('/', [HomeController::class, "index"]);
    $router->group(['prefix' => 'danh-muc'], function($router){

        $router->get('/', [HomeController::class, "index"]);
        // Route có áp dụng filter auth được định nghĩa ở phía trên
        $router->get('/add', [CategoryController::class, "addNew"], ['before' => 'auth']);
        $router->post('/add', [CategoryController::class, "saveCate"]);
    });

    $router->group(['prefix' => 'san-pham'], function($router){

        $router->get('/', [ProductController::class, 'index']);
    });
});


// tham số tùy chọn: {name}?
// tham số bắt buộc: {id}
$router->get('/thong-tin-san-pham/{id}', [ProductController::class, "detail"]);

# Authenticate
$router->any('/logout', [HomeController::class, "logout"]);
$router->get('/login', [HomeController::class, 'loginForm']);
$router->post('/login', [HomeController::class, 'postLogin']);
# End Authenticate



$dispatcher = new Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
    
// Print out the value returned from the dispatched function
echo $response;

?>