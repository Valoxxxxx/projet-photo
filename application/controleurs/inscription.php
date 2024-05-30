<?php
require ('../modeles/utilisateurs.php');
if(empty($_POST)){
    require('../vues/vueInscription.php');
} else{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = $_POST["pseudo"];
    $mail = $_POST["mail"];
    $pw = $_POST["pw"];
    }if (inscriptionOk($pseudo, $mail)) {
        adduser($pseudo, $mail, $pw);
        echo "Inscription réussie !";
    } else {
        echo "Ce pseudo ou ce mail est déjà pris. Veuillez choisir un autre.";
    }
}
?>

