<?php
namespace MovieCatalog\Controllers;
use MovieCatalog\Views\View;

class MovieController {
  static function home() {
    
  }
  static function index() {
    return View::send('home');
  }
  static function show() {
    return View::send('movie_list');
  }
  static function update() {
    
  }
  static function delete() {
    
  }
}