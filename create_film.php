<?php
require_once("init.php");

$newFilm = new Film();
$newFilm->setTitle($argv[1]);
$newFilm->setDuration($argv[2]);
$newFilm->setReleaseDate(new DateTime($argv[3]));

$entityManager->persist($newFilm);
$entityManager->flush();

echo "Created film with id : " . $newFilm->getId() . "\n";