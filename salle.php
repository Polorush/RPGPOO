<?php
require_once('Guerrier.php');
require_once('Magicien.php');
require_once('Paladin.php');
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

</body>
</html>

