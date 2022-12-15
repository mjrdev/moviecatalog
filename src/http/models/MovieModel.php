<?php
namespace MovieCatalog\Http\Models;

class MovieModel {
<<<<<<< HEAD
  private static function init() {
    CONN->query('CREATE TABLE IF NOT EXISTS movies (
      id bigint AUTO_INCREMENT PRIMARY KEY,
      title varchar(1000) NOT NULL,
      description text NOT NULL,
      url_image text NOT NULL
    );');

    $verifyIfExistsInitalValues = CONN->query('SELECT * FROM movies;');
    if($verifyIfExistsInitalValues->num_rows == 0) {
      require('initialValues.php');
      CONN->query($queryInsertValues);
    }
  }
=======
>>>>>>> docker

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