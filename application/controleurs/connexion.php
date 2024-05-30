<?php

require ('../modeles/connect.php'); 

session_start();
require ('../modeles/utilisateurs.php'); 

if(empty($_POST)) {
    require('../vues/vueConnexion.php');
} else {
    if (connexionOK($_POST['pseudo'], $_POST['pw'])) { 
        $_SESSION['pseudo'] = $_POST['pseudo']; 
        header('Location: accueil.php');
    } else {
        $_POST = [];
        $_SESSION['error'] = "Le pseudo ou le mot de passe est incorrect";
        header('Location: connexion.php');
    }
}
?>
