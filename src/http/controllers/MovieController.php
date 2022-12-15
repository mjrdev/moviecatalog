<?php
namespace MovieCatalog\Http\Controllers;
use MovieCatalog\Http\Views\Render;
use MovieCatalog\Http\Models\MovieModel;

class MovieController {
  static function home() {
    $movies = MovieModel::index();
    return Render::send('pages/home', 'index', $movies);
  }

  static function show($params) {
    $movie = CONN->query("SELECT * FROM movies WHERE id = '{$params['id']}';")->fetch_object();
    return Render::send('pages/movie', 'index', $movie);
  }

  static function index() {
    if(count($_GET) == 0) {
      $movies = MovieModel::index(true);
      return Render::send('pages/moviesList', 'index', $movies);
    } else {

      $searchMovies = CONN->query("SELECT * FROM movies WHERE title LIKE '{$_GET['search']}';")->fetch_all();
      return Render::send('pages/moviesList', 'index', $searchMovies);
    }
  }
  static function add() {
    return Render::send('pages/add');
  }
  static function store() {
    $movie = MovieModel::create();
    $message_success = true;
    return Render::send('pages/add', 'index', compact('movie', 'message_success'));
  }
}