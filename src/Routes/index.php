<?php

use App\Router;
use App\Controllers\HomeController;

$router = new Router();
$router->get('/', HomeController::class, 'index');

$router->dispatch();
