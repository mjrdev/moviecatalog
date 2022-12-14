<?php

namespace MovieCatalog\Router;
use FastRoute;

/*
  * Classe responsável pelo roteamento da aplicação.
  * Usa como lib principal Fast Route.
*/

class Router {
  function __construct() {
    $this->routes = [];
  }

  function init(): void {
    $dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
          foreach ($this->routes as $route) {
            $r->addRoute($route['method'], $route['path'], $route['handler']);
          }
      });
      $httpMethod = $_SERVER['REQUEST_METHOD'];
      $uri = $_SERVER['REQUEST_URI'];

      if (false !== $pos = strpos($uri, '?')) {
          $uri = substr($uri, 0, $pos);
      }

      $uri = rawurldecode($uri);
      $routeInfo = $dispatcher->dispatch($httpMethod, $uri);

      switch ($routeInfo[0]) {
        case FastRoute\Dispatcher::NOT_FOUND:
            {
              echo "notfount";
            }
            break;
        case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
            $allowedMethods = $routeInfo[1];
            // ... 405 Method Not Allowed
            break;
        case FastRoute\Dispatcher::FOUND:
            $handler = $routeInfo[1];
            $vars = $routeInfo[2];
            {
              switch (gettype($handler)) {
                case 'object':
                  $handler($vars);
                  break;
                default:
                  call_user_func(array($handler[0], $handler[1]));
                  break;
              }
            }
      }
    }

  public function createRoute(string $method, $middleware, string $path, string | array | object $handler): void {
    array_push($this->routes, compact('method', 'path', 'handler'));
  }

  public function get(string $path, mixed $middleware = null, string | array | object $handler) {
    $this->createRoute('GET', $middleware, $path, $handler);
  }
  public function post(string $path, mixed $middleware = null, string | array | object $handler) {
    $this->createRoute('POST', $middleware, $path, $handler); 
  }
  public function put(string $path, mixed $middleware = null, string | array | object $handler) {
    $this->createRoute('PUT', $middleware, $path, $handler); 
  }
  public function patch(string $path, mixed $middleware = null, string | array | object $handler) {
    $this->createRoute('PATCH', $middleware, $path, $handler);
  }
  public function delete(string $path, mixed $middleware = null, string | array | object $handler) {
    $this->createRoute('DELETE', $middleware, $path, $handler); 
  }
}



