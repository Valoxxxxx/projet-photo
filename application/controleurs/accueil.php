<?php
session_start();
require('../modeles/photos.php');
// on récupère auprès du modéle les photos récemment ajoutées
// $listePhotos = compléter ...... puis décommenter la ligne

$listePhotos = obtenirPhotos(); 
require('../vues/vueAccueil.php');

