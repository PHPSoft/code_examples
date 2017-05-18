<?php
namespace Classes;
/**
 *  Card Deck class
 *  build deck and shaffle deck
 */

class CardDeck {
    
    /**
     * card suits
     * @var array
     */
    protected $suits = array (
        "Spades", "Hearts", "Clubs", "Diamonds"
    );
 
    /**
     * Card faces
     * @var array
     */
    protected $faces = array (
        "Two", "Three", "Four", "Five", "Six", "Seven", "Eight",
        "Nine", "Ten", "Jack", "Queen", "King", "Ace"
    );
    
    /**
     *
     * @var array 
     */
    protected $deck = array();
    
    /**
     * initialising card deck
     */
    public function __construct()
    {
        $this->buildDeck();
    }
    
    /**
     * Build deck of cards
     * @return type
     */
    public function buildDeck()
    {
        foreach ($this->suits as $suit) {
            foreach ($this->faces as $face) {
                $this->deck[] = array ("face"=>$face, "suit"=>$suit);
            }
        }
    }
    
    /**
     * 
     * @return type
     */
    public function shaffleDeck()
    {
        return shuffle($this->deck);
    }

    /**
     *  we have 52 cards to split to two parts
     *  or give rest cards, left from prev split.
     */

    public function takeCardsSplit()
    {
        $res = array();

        if (count($this->deck) == 52) {
            $res = array_slice($this->deck,26);
        }
        elseif (count($this->deck) == 26) {
            $res =  $this->deck;
        }
        else {
            return null; // no card left -> not good
        }
        return $res;
    }
    
}