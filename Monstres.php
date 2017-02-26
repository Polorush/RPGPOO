<?php

class Monstre
{

    public $_id;
    public $_name;
    public $_attaque;
    public $_magie;
    public $_vie;

    public function id()
    {
        return $this->_id;
    }

    public function name()
    {
        return $this->_name;
    }

     public function attaque()
    {
        return $this->_attaque;
    }

    public function vie()
    {
        return $this->_vie;
    }
   
    public function attaquer($cible)
    {
        $degats = $this->attaque() - $cible->defense();
        $cible->_vie -= $degats;
        echo 'Le ' . $this->name() . ' frappe ' . $cible->classe();
    }

     public function vivant()
    {
        if ($this->vivant() < 0) {
            $this->_vivant = 0;
        }
    }

    public function mort()
    {
        if ($this->_vie == 0) {
            echo "Le monstre est mort";
        }
    }

}

?>