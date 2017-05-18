<?php
namespace Classes;

use Classes\CardDeck;
use Classes\Player;


class GameController
{
    /**
     * @var array
     */
    protected $cardDeck;

    /**
     * @var Player
     */
    protected $playerOne;

    /**
     * @var Player
     */
    protected $playerTwo;

    /**
     * @var int
     * if 0 - player 1
     * if 1 - player 2
     */
    protected $cardPlaceTourn = 0;


    /**
     * GameController constructor.
     * @param $playerOne
     * @param $playerTwo
     */
    public function __construct($playerOne, $playerTwo)
    {
        $this->playerOne = $playerOne;

        $this->playerTwo = $playerTwo;
    }

    /**
     * dial cards from palyer and see outcome
     */
    public function dialPlayerCards()
    {

        $lastDial = $this->cardPlaceTourn;

        if ($this->cardPlaceTourn == 0) {
            $card1 = $this->playerOne->dialCard();
            $this->cardPlaceTourn = 1;

        }
        else {
            // winning run for cards - last player turning card
            $card2 = $this->playerTwo->dialCard();
            $this->cardPlaceTourn = 0;
        }

        if ($card2['face'] == $card1['face']) {

            if ($lastDial == 0) {
                $this->playerOne->takeWonCard($card2);
            }
            else {
                $this->playerTwo->takeWonCard($card1);
            }
        }
    }

    /**
     * @return bool
     */
    public function checkIfGameOn()
    {
        return ($this->playerOne->checkPlayersCards && $this->playerTwo->checkPlayersCards);
    }

    /**
     * Check who is winner
     */
    public function checkWinner()
    {
        if ($this->playerOne->countWonCards() > $this->playerTwo->countWonCards()) {
            return "Winner player One!";
        }
        else if ($this->playerOne->countWonCards() < $this->playerTwo->countWonCards()) {
            return "Winner player Two!";
        }
        else {
            return "It is a drow!";
        }
    }
}

