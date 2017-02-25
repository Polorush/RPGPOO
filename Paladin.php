<?php
require_once('Personnage.php');

class Paladin extends Personnage
{
    public
        $_classe = 'Paladin',
        $_attaque = 1200,
        $_defense = 200,
        $_magie = 1200,
        $_vie = 15000,
        $_arme = "épée et baguette";
}