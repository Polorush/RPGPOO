<?php
require_once('Personnage.php');

class Magicien extends Personnage
{
    public
        $_classe = 'Magicien',
        $_attaque = 0,
        $_defense = 1000,
        $_magie = 5000,
        $_vie = 5000,
        $_arme = "baguette";
}