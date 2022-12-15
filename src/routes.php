<?php 

use MovieCatalog\Router\Router;
use MovieCatalog\Http\Controllers\MovieController;

$routes = new Router();

$routes->get('/', null, [MovieController::class, 'home']);
$routes->get('/filmes', null, [MovieController::class, 'index']);
$routes->get('/filme/{id}', null, [MovieController::class, 'show']);
$routes->get('/adicionar', null, [MovieController::class, 'add']);
$routes->post('/adicionar', null, [MovieController::class, 'store']);

$routes->get('/assets', null, function() {
  $path = $_GET['path'];
  $file = require 'assets/'.$path;
  return $file;
});

$routes->init();