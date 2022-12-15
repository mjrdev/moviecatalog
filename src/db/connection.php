<?php
namespace MovieCatalog\Db;
use mysqli;
class Connection {
  public static $conn = null;

  public static function create(string $host, string $user, string $password, string $dbname): mysqli {
    if(isset($conn)) {
      return $conn;
    } else {
      $mysqli = new mysqli($host, $user, $password, $dbname, 3306);
      $conn = $mysqli;
      if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }

      return $mysqli;
    }
  }
}
?>