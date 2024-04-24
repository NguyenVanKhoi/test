<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function () {
    if (!isset($_SESSION['auth']) || empty($_SESSION['auth'])) {
        header('location: ' . BASE_URL . 'login');
        die;
    }
});

// khu vực cần quan tâm -----------
// bắt đầu định nghĩa ra các đường dẫn
$router->get('/', function () {
    return "trang chủ";
});
//định nghĩa đường dẫn trỏ đến Product Controller
// user
$router->get('product', [App\Controllers\ProductController::class, 'index']);
$router->get('cart', [App\Controllers\ProductController::class, 'cart']);
$router->get('change-pass', [App\Controllers\ProductController::class, 'change_pass']);
$router->get('forgot-pass', [App\Controllers\ProductController::class, 'forgot_pass']);
$router->get('info-acccount', [App\Controllers\ProductController::class, 'infoAccout']);
$router->get('info-pro', [App\Controllers\ProductController::class, 'infoPro']);
$router->get('login', [App\Controllers\ProductController::class, 'login']);
$router->get('order', [App\Controllers\ProductController::class, 'order']);
$router->get('register', [App\Controllers\ProductController::class, 'register']);
$router->get('review_info', [App\Controllers\ProductController::class, 'review_info']);
$router->get('thong-tin-dat-hang', [App\Controllers\ProductController::class, 'thongTinDatHang']);
// end user
// admin

// $router->get('add-product', [App\Controllers\ProductController::class, 'addProduct']);
// $router->post('post-product', [App\Controllers\ProductController::class, 'postProduct']);
// $router->get('detail-product/{id}', [App\Controllers\ProductController::class, 'detail']);
// $router->post('edit-product/{id}', [App\Controllers\ProductController::class, 'editProduct']);
// $router->get('delete-product/{id}', [App\Controllers\ProductController::class, 'deleteProduct']);
// khu vực cần quan tâm -----------
//$router->get('test', [App\Controllers\ProductController::class, 'index']);

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;
