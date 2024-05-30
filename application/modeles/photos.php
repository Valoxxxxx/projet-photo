<!-- A faire -->
<?php
require ('connect.php');
function obtenirPhotos() {
// Connexion à la base de données
$dbh = connect(); // avant la fonction, il faut avoir fait un require pour pouvoir utiliser la fonction connect

// Requête SQL pour obtenir les photos, triées par date
$sql = "SELECT * FROM photo ORDER BY date_photo DESC";

// Préparation et exécution de la requête
$sth = $dbh->prepare($sql);
$sth->execute();

// Récupération des résultats sous forme de tableau associatif
$results = $sth->fetchAll(PDO::FETCH_ASSOC);

// Retourner les résultats
return $results;
}















// pour poster une photo


function importPhoto($auteur, $description, $titre, $chemin) {
    $dbh = connect();
    $sql = "INSERT INTO photo (auteur_photo, description_photo, date_photo, titre_photo, chemin_photo) VALUES (:auteur, :description, :date, :titre, :chemin)";
    
    $date = date("Y-m-d H:i:s"); 

    $sth = $dbh->prepare($sql);
    $sth->bindParam(':auteur', $auteur);
    $sth->bindParam(':description', $description);
    $sth->bindParam(':date', $date);
    $sth->bindParam(':titre', $titre);
    $sth->bindParam(':chemin', $chemin);

    $sth->execute();
}
?>
















