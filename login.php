<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/header.css">
    <title>ShaRK_eSport® | Connexion</title>
</head>

<body>
    <?php include_once 'templates/header.php' ?>
    <main class="flex">
        <div class="login">
        
        <form action="./controllers/log.php" method="POST">
                <div class="login-form">
                    <h3>Username:</h3>
                    <br>
                    <input class="login-text" name="pseudo" type="text" placeholder="Username"><br>
                    <input class="login-text" name="password" type="text" placeholder="Password"><br>
                    <br>
                    <input name="submitted" type="submit" value="Login" class="login-button">
                </div>
            </form>
        </div>
    </main>
</body>

</html>