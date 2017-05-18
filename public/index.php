<?php

include "Classes/CardDeck.php";
include "Classes/Player.php";
include "Classes/GameController.php";

use \Classes\GameController;
use \Classes\Player;
use \Classes\CardDeck;

$cards = new CardDeck();
$cards->shaffleDeck();


$playerOne = new Player($cards->takeCardsSplit());

$playerTwo = new Player($cards->takeCardsSplit());


$game = new GameController($playerOne, $playerTwo);


// via post:
$game->dialPlayerCards();



// after few itteration via interface which i run out of tim eot write and checkIfGameOn = false show this
$game->checkWinner();



