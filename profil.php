<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/profil.css">
    <link rel="stylesheet" href="./css/header.css">
    <title>Mythic | Profil</title>
</head>

<body>
    <?php include_once 'templates/header.php' ?>
    <main class="flex">
        <div class="profil flex">
            <div class="left flex"><img src="img/profil.jpg" width="auto" height="100%"></div>
            <div class="right">
                <h1> Profil </h1>
                <br>
                <h3> @<?= $_SESSION['pseudo'] ?>_cod </h3>
                <ul class="flex">
                    <li>
                        <h2>Matchs joué</h2><br>
                        <h2>200</h2>
                    </li>
                    <li>
                        <h2>Pourcentage de HS</h2><br>
                        <h2>70%</h2>
                    </li>
                    <li>
                        <h2>Major remporté</h2><br>
                        <h2>22</h2>
                    </li>
                </ul>
                <li id="login-button" class="flex"><a href="settings.php">paramètres</a></li>
                <br>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>