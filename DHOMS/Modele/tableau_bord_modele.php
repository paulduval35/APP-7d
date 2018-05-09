<?php

include "connect_database_modele.php";

function getMaisons($ID_personne_connecte){
    global $bdd;
    $reponse = $bdd->query("SELECT DISTINCT * 
FROM habitation JOIN appartenance_maison ON habitation.ID = appartenance_maison.ID_habitation 
WHERE appartenance_maison.ID_personne = '$ID_personne_connecte'");

    return $reponse;
}

function getPieces($id_maison){
    global $bdd;
    $listePiece = $bdd->query("SELECT * FROM piece WHERE piece.ID_habitation = '$id_maison'");
    return $listePiece;
}

function getCapteur($id_piece){
    global $bdd;
    $listeCapteur = $bdd->query("SELECT * FROM controleur WHERE controleur.ID_piece ='$id_piece'");
    return $listeCapteur;
}

function getValuesCapteur($id_capteur){
    global $bdd;
    $listeValeursCapteurs = $bdd->query("SELECT * FROM donnee WHERE donnee.ID_controleur = '$id_capteur'");
    return $listeValeursCapteurs;
}

?>
