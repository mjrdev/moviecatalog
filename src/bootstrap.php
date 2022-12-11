<?php

use MovieCatalog\Entity\Movie;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

// $paths = ['entities/entityMovie.php'];
$paths = ["/entities"];
$isDevMode = true;

$dbParams = [
  'driver' => 'pdo_mysql',
  'user' => 'root',
  'password' => 'password',
  'dbname' => 'movies',
];

$config = ORMSetup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

require_once 'entities/EntityMovie.php';

$movie = new Movie;
$movie->setName('Movie Example');
$movie->setDescription('This is um movie example description');
$movie->setUrlImage('http://jjSJAJskaKKa');

$entityManager
// $entityManager->flush();