<?php
require_once('Guerrier.php');
require_once('Magicien.php');
require_once('Paladin.php');
require_once('Tome.php');
require_once('Epee.php');
require_once('Arc.php');
require_once('Baguette.php');
require_once('Gobelin.php');
require_once('MagicienNoir.php');
require_once('Dragon.php');
require_once('Game.php');

session_start();
if ( isset( $_SESSION['personnage'] ) )
{
    $personnage = unserialize($_SESSION['personnage']);
};
if ( isset( $_SESSION['jeu'] ) )
{
    $jeu = unserialize($_SESSION['jeu']);
}else{
    $jeu = new Game();
};

if (!isset($_POST['step'])){
    $step=0;
}else{
    $step=$_POST['step'];
}

?>

<?php
@include('header.html');
?>

<body class="donjon">

<h1>Vous êtes à la salle <?php echo $jeu->salle(); ?> </h1>

	<!-- JOKE --> 

<h2>Merci d'avoir essayé la version gratuite du jeu, pour acheter la version complète :</h2> 

<h2><a href="http://store.steampowered.com/app/229480/" style="color:#00FFFF">Lien Steam Joke</a><h2>

</body>
</html>

