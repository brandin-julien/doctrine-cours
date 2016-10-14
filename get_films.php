<?php

require_once("init.php");

$filmRepository = $entityManager->getRepository("Film");

$films = $filmRepository->findAll();

foreach ($films as $film) {
  echo "[".$film->getId()."] ".
      $film->getTitle()
      ." (".
      $film->getReleaseDate()->format("Y")
      .")"
      .PHP_EOL;
  echo "\tSéances :".PHP_EOL;
  $seances = $film->getSeances();

  if(count($seances) > 0){
    foreach($seances as $seance){
      echo " - ".
      $seance->getShowing()->format("H:i:s")
      ." on "
      .$seance->getShowing()->format("l j F")
      .PHP_EOL;
    }  
  }
}