<?php session_start(); ?>
<header>
    <nav>
        <ul class="flex">
            <li><a href="/">Home</a></li>
            <li><a href="#">Informations</a></li>
            <?php if (isset($_SESSION['pseudo'])) :   ?>
                <li><a href="./controllers/logout.php">Deconnexion</a></li>
                <li id="profil"><a href="profil.php"> <?= $_SESSION['pseudo'] ?> </a></li>
            <?php else : ?>
                <li><a href="./login.php">Se connecter</a></li>
            <?php endif ?>
        </ul>
    </nav>
</header>