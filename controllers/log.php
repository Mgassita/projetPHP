<?php

if ( ! isset( $_POST['submitted'] ) )
header('Location: /');

// Sample Email and password for demo

$valeurs = [
    'pseudo' => 'Jon',
    'password' => '1234'
];

if ( $valeurs['pseudo'] !== $_POST['pseudo'] 
OR $valeurs['password'] !== $_POST['password'] ){    
    // HTTP_REFERER recupère la page d'ou tu viens et te renvoie sur cette même page 
    header('Location: http://192.168.33.42/noConnection.php');
    exit();
}

session_start();

// Storing session data
$_SESSION["isLogged"] = "1";

// login successful,redirect user to any page
$_SESSION['pseudo'] = $_POST ['pseudo'];

header('Location: /');

exit();
