<?php
require_once('Personnage.php');

class Guerrier extends Personnage
{
    public
        $_classe = 'Guerrier',
        $_attaque = 1200,
        $_defense = 200,
        $_magie = 0,
        $_vie = 15000,
        $_arme = "épée";
}