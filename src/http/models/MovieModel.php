<?php
namespace MovieCatalog\Http\Models;

class MovieModel {

  public static function create(): mixed {
    $title = $_POST['title']; $description = $_POST['description']; $url = $_POST['url_image'];
    $exec = CONN->query("INSERT INTO movies VALUES (default, '{$title}', '{$description}', '{$url}');");

    return $exec;
  }

  public static function index(): mixed {

    $movies = CONN->query('SELECT * FROM movies;');

    return $movies->fetch_all();
  }
}