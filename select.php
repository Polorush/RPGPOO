<?php
session_start();
session_destroy();
@include('style/header.html');
?>

<style>
.background{
    background:url('img/4096x2160.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

<body class="background ">

            <div class="col-lg-12">
                <h1 class="titre_text">Choisissez votre classe</h1>

                <form method="post" action="profil.php">
                    <select name="classe">
                        <option value="Guerrier">Guerrier</option>
                        <option value="Magicien">Magicien</option>
                        <option value="Paladin">Paladin</option>
                    </select>
                    
                        
                    <input type="text" name="name" id="persos" class="form-control" placeholder="Pseudo"/>
                    <input type="submit">

                </form>

            </div>