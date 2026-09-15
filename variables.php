<?php

// Retrieving Variables Using the MySQL Client
$projetsStatement = $mysqlClient->prepare('SELECT * FROM projets');
$projetsStatement->execute();
$projets = $projetsStatement->fetchAll();

?>
