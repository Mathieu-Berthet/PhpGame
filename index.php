<?php

require("src/dbConnector.php");
require("src/PlayersDAO.php");
require("src/GameDAO.php");


$bdd = dbConnector::getInstance();

//var_dump($bdd);
$bdd->query("use SquaresGame");

$playerDAO = new PlayersDAO();

//Lancement des tests
/*$playerDAO->findPlayers($bdd);
$playerDAO->findPlayersByPseudo($bdd, "aHenrirt");

$playerDAO->findPlayersByEmail($bdd, 'Henri@gmail.com');

$playerDAO->findPlayersByBirthDate($bdd, "2006-06-14");*/


//$playerDAO->createPlayer($bdd, "test", "test26", "test@gmail.com", "2005-06-04");

//Pour vérifier l'ajout de la données
$playerDAO->findPlayersById($bdd, 4);