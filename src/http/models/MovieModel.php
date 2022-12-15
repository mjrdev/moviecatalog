<?php
namespace MovieCatalog\Http\Models;

class MovieModel {

  public static function create(): mixed {
    $title = $_POST['title']; $description = $_POST['description']; $url = $_POST['url_image']; $year = $_POST['year']; $country = $_POST['country'];
    $exec = CONN->query("INSERT INTO movies VALUES (default, '{$title}', '{$description}', '{$url}', '{$year}', '{$country}');");

    return $exec;
  }

  public static function index($des=false): mixed {

    if($des) {
      $movies = CONN->query('SELECT * FROM movies ORDER BY title;');

      return $movies->fetch_all();
    }
    $movies = CONN->query('SELECT * FROM movies;');

    return $movies->fetch_all();
  }
}