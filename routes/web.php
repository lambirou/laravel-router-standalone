<?php

use App\Http\Controllers\MainController;
use Illuminate\Routing\Router;

/**
 * @var Router $router
 */

$router->get('/', [MainController::class, 'index']);
$router->get('/hello/{name}', [MainController::class, 'hello']);
