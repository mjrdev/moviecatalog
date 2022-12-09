<?php 

use MovieCatalog\Router\Router;
use MovieCatalog\Controllers\MovieController;

$routes = new Router();

$routes->get('/', null, [MovieController::class, 'index']);
$routes->get('/show', null, [MovieController::class, 'show']);

$routes->init();
