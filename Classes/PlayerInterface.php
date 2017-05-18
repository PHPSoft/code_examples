<?php
namespace Classes;

interface PlayerInterface {
    
    /**
     * Array of dialed cards
     */
    public function dialCard();
    
    
    /**
     * Array of collected cards
     */
    public function takeWonCard($card);


    /**
     * @return int
     */
    public function countWonCards();

}
