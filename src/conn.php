<?php
use MovieCatalog\Db\Connection;

define("CONN", Connection::create('db', 'root', '', 'movies_catalog'));