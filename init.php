<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once("vendor/autoload.php");

$config= Setup::createAnnotationMetadataConfiguration([
    __DIR__."/src"
  ], true);

$conn = array(
    'driver' => 'pdo_sqlite',
  // 'driver' => 'pdo_mysql',
    'path' => __DIR__ . '/db.sqlite',
    // "host" => "localhost",
    // "dbname" => "mydbname",
    // "user" => "yourusername",
    // "password" => "yourpassword",
);

$entityManager = EntityManager::create($conn, $config);


