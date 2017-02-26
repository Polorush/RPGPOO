<?php
session_start();
session_destroy();
@include('header.html');
?>

<style>

</style>

<body class="select">

    <h1 class="titre_select">Choisissez votre classe</h1>

    <form method="post" action="profil.php">

        <select name="classe">
            <option value="Guerrier">Guerrier</option>
            <option value="Magicien">Magicien</option>
            <option value="Paladin">Paladin</option>
        </select>
            
        <input type="text" name="name" id="persos" placeholder="Pseudo"/>
        <br>
        <input type="submit">

    </form>

</body>
</html>