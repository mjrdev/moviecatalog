<?php 

require 'router/router.php';
use movieCatalog\Controllers\MovieController;

$m = new MovieController();

$routes = new Router();
$routes->get('/', $m->index());

$routes->init();
