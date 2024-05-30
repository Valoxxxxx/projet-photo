

<?php 


session_start();
require('../modeles/photos.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = date("Y-m-d H:i:s");
    $chemin = 'public/media/images/';

    if (!empty($_FILES['photo']['name']) && !empty($_POST['titre']) && !empty($_SESSION['pseudo'])) {
        $titre = $_POST['titre'];
        $description = isset($_POST['description']) ? $_POST['description'] : '';
        $nomTemporaire = $_FILES['photo']['tmp_name'];
        $fileName = $_FILES['photo']['name'];

        $filePath = $chemin . basename($fileName);
        if (move_uploaded_file($nomTemporaire, '../../'.$filePath)) {
            importPhoto($_SESSION['pseudo'], $description, $titre, $filePath);
            header("Location: accueil.php");
            exit();
        } else {
            echo "Échec du téléchargement de l'image.";
        }
    } else {
        echo "Tous les champs sont requis.";
    }
} else {
    require(__DIR__ . '/../vues/vuePoster_photo.php');
}
?>


