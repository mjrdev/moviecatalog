<?php
namespace MovieCatalog\Http\Views;

class View {
  static public function send(string $name, string $template = "index", $props = []): void {

    $path = '/public/';
    $file = __DIR__.$path.$name.'.php';
    
    if(file_exists($file)) {
      $title = 'Filmes em Destaque';
      $view = require __DIR__.$path.$template.'.php';
    } else {
      echo '[ERROR] view não encontrada';
    }
  }
}