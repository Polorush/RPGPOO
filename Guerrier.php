<?php

require_once('Personnage.php');

class Guerrier extends Personnage {

    public
        $_classe = 'Guerrier',
        $_vie = 750,
        $_attaque = 200,
        $_defense = 200,
        $_magie = 0,
        $_arme = "Épée";
}