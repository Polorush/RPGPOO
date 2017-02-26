<?php

class Game
{

    private $_salle = 1;

    public function salle()
    {
        return $this->_salle;
    }
    public function securiteSalle()
    {
        if ($this->_salle  == 1) {
            return true;
        }
    }
}

?>