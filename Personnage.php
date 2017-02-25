<?php

class Personnage
{
    public
        $_name,
        $_classe,
        $_attaque,
        $_magie,
        $_defense,
        $_vie,
        $_arme;


    // GETTERS //

    public function getName() {
        return $this->_name;
    }
    public function attaque()
    {
        return $this->_attaque;
    }
    public function classe()
    {
        return $this->_classe;
    }

    public function magie()
    {
        return $this->_magie;
    }

    public function defense()
    {
        return $this->_defense;
    }

    public function vie()
    {
        return $this->_vie;
    }
   
    public function arme() {
        return $this->_arme;
    }
}