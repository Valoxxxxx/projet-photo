<?php
session_start();

// Si des données ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si tous les champs requis sont remplis
    if (!empty($_POST['auteur']) && !empty($_POST['titre']) && isset($_FILES['photo'])) {
        // Récupération des données du formulaire
        $auteur = $_POST['auteur'];
        $description = isset($_POST['description']) ? $_POST['description'] : '';
        $titre = $_POST['titre'];
        $nomTemporaire = $_FILES['photo']['tmp_name'];
        
        // Appel de la fonction pour ajouter la photo
        importPhoto($auteur, $description, $titre, $nomTemporaire);
        
        // Redirection vers une autre page ou affichage d'un message de succès
        header("Location: index.php");
        exit();
    } else {
        // Affichage d'un message d'erreur si des champs sont manquants
        echo "Tous les champs sont requis.";
    }
} else {
    // Affichage du formulaire pour ajouter une photo si aucune donnée n'a été soumise
    include('../vues/vuePoster_photo.php');
}
?>





