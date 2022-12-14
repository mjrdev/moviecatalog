<?php
namespace MovieCatalog\Http\Controllers;
use MovieCatalog\Http\Views\View;
use MovieCatalog\Http\Models\MovieModel;

class MovieController {
  static function home() {
    $movies = MovieModel::index();
    return View::send('pages/home', 'index', $movies);
  }
  static function index() {
    $movies = MovieModel::index();
    return View::send('pages/moviesList', 'index', $movies);
  }
  static function add() {
    return View::send('pages/add');
  }
  static function store() {
    $movie = MovieModel::create();
    // return View::send('pages/add', 'index', compact('movie'));

    echo $movie;
  }
}