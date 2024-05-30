<?php
require_once('connect.php');

function connexionOk($pseudo, $pw)
{
    $db = connect();

    $query = "SELECT * FROM utilisateur WHERE pseudo_utilisateur = :pseudo AND mdp_utilisateur = :password";
    $sth = $db->prepare($query);
    $sth->execute([':pseudo' => $pseudo, ':password' => $pw]);
    $result = $sth->fetch(PDO::FETCH_ASSOC);

    if ($result == "") {
        return false;
    } else {
        return true;
    }
}




function InscriptionOk($pseudo, $email)
{
    $db = connect();

    $query = "SELECT * FROM utilisateur WHERE pseudo_utilisateur = :pseudo AND mail_utilisateur = :email";
    $sth = $db->prepare($query);
    $sth->execute([':pseudo' => $pseudo, ':email' => $email]);
    
    $result = $sth->fetch(PDO::FETCH_ASSOC);

    if($result == "") {
        return true;
    } else {
        return false;
    }
}


function adduser($pseudo, $mail, $pw){
    $dbh = connect();

    $sql = "INSERT INTO `utilisateur`(`pseudo_utilisateur`, `mail_utilisateur`, `mdp_utilisateur`) VALUES (:pseudo, :mail, :pw)";

    $sth = $dbh->prepare($sql);

    $sth->bindParam(':pseudo', $pseudo);
    $sth->bindParam(':mail', $mail);
    $sth->bindParam(':pw', $pw);

    $sth->execute();
}






















?>

