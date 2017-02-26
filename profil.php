<?php
session_start();
require_once('Guerrier.php');
require_once('Magicien.php');
require_once('Paladin.php');
@include('header.html');
?>

<body 
<?php 
if($_POST['classe'] == "Guerrier"){
?> 
class="guerrier"
<?php
}else if($_POST['classe'] == "Magicien" ){
?>
class="magicien"
<?php
}else if($_POST['classe'] == "Paladin"){
?>
class="paladin"
<?php
}else {
    echo "pas compris";
}
?>
>
    <div class="container flex">
        <h2 class="game_title">Bienvenue <?php echo $_POST['name'] ?></h2>
        <h2 class="game_title">Vous avez choisi le <?php echo $_POST['classe'] ?></h2>
            
            <form action="salle.php" method="POST" class="game">
                <input type="submit" value="Entrer dans le donjon !" >
            </form>

        <?php
        if($_POST['classe'] == "Guerrier"){
            $perso = new Guerrier();
            $_SESSION['personnage'] = serialize(new Guerrier());
        }else if($_POST['classe'] == "Magicien" ){
            $perso = new Magicien();
            $_SESSION['personnage'] = serialize(new Magicien());
        }else if($_POST['classe'] == "Paladin"){
            $perso = new Paladin();
            $_SESSION['personnage'] = serialize(new Paladin());
        }else {
            echo "pas compris";
        }

        ?>
        <br><br>
        <?php
        echo "<h1>Fiche technique :</h1>". "<br>" ;
        ?>
        <div class="row">
            <div class="col-lg-6 push-lg-3 fiche">
                <?php
                echo '<p>Votre classe : ' . $perso->classe(). '</p>';
                echo '<p>Points de vie : ' . $perso->vie(). '</p>';
                echo '<p>Attaque : ' . $perso->attaque(). '</p>';
                echo '<p>Defense : ' . $perso->defense(). '</p>';
                echo '<p>Magie : ' . $perso->magie(). '</p>';
                echo '<p>Arme : ' . $perso->arme(). '</p>';
                ?>
            </div>
        </div>
    </div>
</body>


