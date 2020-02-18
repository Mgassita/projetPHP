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
            <form class= "flex" action="./controllers/preferences.php" method="POST">
                <h2 class="set">Afficher ou masquer la description du site sur l'index</h2>
                <input type="checkbox" name="text" value="checked">
                <input type="submit" value="valider" id="login-button">
            </form>
            <br>
        </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>