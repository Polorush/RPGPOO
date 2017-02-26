<?php

require_once('Personnage.php');

class Magicien extends Personnage {

    public
        $_classe = 'Magicien',
        $_vie = 250,
        $_attaque = 0,
        $_defense = 100,
        $_magie = 500,
        $_arme = "Baguette";
}