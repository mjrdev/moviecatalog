<?php
namespace MovieCatalog\Http\Views;

class Render {
  static public function send(string $name, string $template = "index", $props = []): void {

    $path = '/public/';
    $file = __DIR__.$path.$name.'.php';
    if(file_exists($file)) {
      $view = require __DIR__.$path.$template.'.php';
    } else {
      echo '[ERROR] view não encontrada';
    }
  }

  static public function notFound($path): void {
    $view = require __DIR__.'/public'.$path.'.php';
  }
}