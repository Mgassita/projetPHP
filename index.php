<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <title>ShaRK_eSport® | Accueil</title>
</head>

<body>
    <?php include_once 'templates/header.php' ?>


    <main class="flex">
        <div class="index">
            <h1>ShaRK_eSport®</h1>
            <div class="blank"></div>
            <img src="./img/logoShaRK.jpg" alt="">
            <?php if (isset($_SESSION['text']) == 'checked') :   ?>
                <h2 id="txtDesc">ShaRK_eSport te souhaite la bienvenue <?= $_SESSION['pseudo'] ?> sur note site</h2>
            <div class="blank"></div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum modi, aliquid cupiditate atque id temporibus fuga vel ipsam, nulla facere saepe placeat laudantium ullam quasi vero ratione expedita nihil fugiat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sint earum consectetur vero ipsam pariatur repellendus culpa aliquam, necessitatibus eligendi excepturi ex qui animi harum dolorum architecto quia, nihil reprehenderit?</p>
        </div>


    </main>
<?php endif ?>
</body>

</html>