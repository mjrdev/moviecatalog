<?php
namespace MovieCatalog\Http\Models;

class MovieModel {
  private static function init() {
    CONN->query('CREATE TABLE IF NOT EXISTS movies (
      id bigint AUTO_INCREMENT PRIMARY KEY,
      title varchar(255) NOT NULL,
      description text NOT NULL,
      url_image text NOT NULL
    );');
  }

  public static function create(): mixed {
    self::init();
    $title = $_POST['title']; $description = $_POST['description']; $url = $_POST['url_image'];
    CONN->query("INSERT INTO movies VALUES (default, '{$title}', '{$description}', '{$url}');");

    return 'add';
  }

  public static function index(): mixed {
    self::init();

    $movies = CONN->query('SELECT * FROM movies;');

    return $movies->fetch_all();
  }
}