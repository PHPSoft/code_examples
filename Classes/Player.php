<?php
namespace Classes;

use Classes\PlayerInterface;

class Player implements PlayerInterface 
{

    protected $playerCards = array();

    protected $wonCards = array();

    public function __construct($playersCards)
    {
        $this->playersCards = $playersCards;
    }


    /**
     * get players card one by one
     */
    public function dialCard()
    {
        $res = array();

        if (count($this->playersCards) > 0) {
            $res = array_shift($this->playersCards);
        }

        return $res;
    }

    /**
     * add to array of collected cards
     */
    public function takeWonCard($card)
    {
        array_push($this->wonCards, $card);
    }

    /**
     * @return int
     */
    public function countWonCards()
    {
        return count($this->wonCards);
    }

    /**
     * check if player still have cards to play
     */
    public function checkPlayersCards()
    {
       return empty($this->playerCards) ? false : true;
    }
}
