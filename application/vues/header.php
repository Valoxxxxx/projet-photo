<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/global.css">
    <title>Site de concours photo</title>
    
</head>


<body>
    <header>
        
        <menu>
            <?php
            // Vérifier si l'utilisateur est connecté
            if (isset($_SESSION['pseudo'])) {
                // L'utilisateur est connecté
            ?>
            
                <a href="accueil.php">Accueil</a>
                <a href="#">Connecté en tant que <?= $_SESSION['pseudo'] ?></a>
                <a href="deconnexion.php">Se déconnecter</a>
                <a href="poster_photo.php">Poster une photo</a>
            <?php
            } else {
                // L'utilisateur n'est pas connecté
            ?>
                <a href="accueil.php">Accueil</a>
                <a href="connexion.php">Se connecter</a>
                <a href="inscription.php">S'inscrire</a>
            
            <?php
            }
            ?>
        </menu>
    </header>

    
</body>