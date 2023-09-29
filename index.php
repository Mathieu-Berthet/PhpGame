<?php

require("src/dbConnector.php");
require("src/PlayersDAO.php");
require("src/GameDAO.php");


$bdd = dbConnector::getInstance();

//var_dump($bdd);
$bdd->query("use SquaresGame");

$playerDAO = new PlayersDAO();

$playerDAO->findPlayersById($bdd, 1);

/*$GameDAO = new GameDAO();

$GameDAO->findGames($bdd);*/
