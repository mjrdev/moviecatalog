<?php 
require 'vendor/autoload.php';

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

      // Strip query string (?foo=bar) and decode URI
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
              if(gettype($handler) == 'string') {
                echo "string";
              } else {
                $handler();
              }
            }
      }
    }

  public function createRoute(string $method, string $path, mixed $handler): void {
    array_push($this->routes, compact('method', 'path', 'handler'));
  }

  public function get(string $path, mixed $handler) { $this->createRoute('GET', $path, $handler); }
  public function post() { $this->createRoute('GET', $path, $handler); }
  public function put() { $this->createRoute('PUT', $path, $handler); }
  public function patch() { $this->createRoute('PATCH', $path, $handler); }
  public function delete() { $this->createRoute('DELETE', $path, $handler); }
}



