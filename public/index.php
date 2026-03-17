<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;
use App\Modules\Home\HomeController;
use App\Modules\Product\ProductController;

$router = new Router();

$router->get('/', [HomeController::class, 'index']);
$router->get('/products', [ProductController::class, 'index']);

$router->dispatch($_SERVER['REQUEST_URI']);