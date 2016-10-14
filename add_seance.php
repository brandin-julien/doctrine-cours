<?php

require_once("init.php");

$film_id = $argv[1];

$film = $entityManager->find("Film",$film_id);

$showing = new DateTime($argv[2]);
$seance = new Seance();
$seance->setShowing($showing);

$seance->setFilm($film);

$entityManager->persist($seance);
$entityManager->flush();

echo "New seance at "
    .$seance->getShowing()->format("H:i:s")
    ." on "
    .$seance->getShowing()->format("l j F")
    ." for film "
    .$film->getTitle()
    .PHP_EOL;