<?php

require_once("init.php");

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);