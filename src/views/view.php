<?php
namespace MovieCatalog\Views;
class View {

  static public function send(string $name): void {

    $path = '/public/';
    $file = __DIR__.$path.$name.'.php';
    
    if(file_exists($file)) {
      $path = '/public/';
      $title = 'Filmes em Destaque';
      $view = require __DIR__.$path.$name.'.php';
    } else {
      echo '[ERROR] view não encontrada';
    }
  }
}