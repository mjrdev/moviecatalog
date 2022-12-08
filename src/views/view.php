<?php
namespace MovieCatalog\Views;

class Views {
  static public function send(string $name) {
    return require __DIR__.'assets/'.$name.'.php';
  }
}