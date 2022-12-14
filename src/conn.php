<?php

use MovieCatalog\Db\Connection;
define("CONN", Connection::create('localhost', 'root', '', 'catalog_movies'));