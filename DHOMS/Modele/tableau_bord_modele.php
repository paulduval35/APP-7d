<?php

include "connect_database_modele.php";

function getMaisons($ID_personne_connecte){
    global $bdd;
    $reponse = $bdd->query("SELECT DISTINCT * 
FROM habitation JOIN appartenance_maison ON habitation.ID = appartenance_maison.ID_habitation 
WHERE appartenance_maison.ID_personne = '$ID_personne_connecte'");

    return $reponse;
}

function getNomMaison($id_maison){
    global $bdd;
    $reponse = $bdd->query("SELECT habitation.nom FROM habitation WHERE habitation.id = '$id_maison'");
    $retour = $reponse->fetch();
    return $retour['nom'];
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
    $listeValeursCapteurs = $bdd->query("SELECT * FROM donnee d 
INNER JOIN (SELECT donnee.ID_controleur, MAX(donnee.date) 
AS maxdate FROM donnee WHERE donnee.ID_controleur = '$id_capteur' 
GROUP BY donnee.ID_controleur) last_d ON d.ID_controleur = '$id_capteur' AND d.date = last_d.maxdate");

    while ($liste = $listeValeursCapteurs -> fetch()){
        $a = $liste['donnee'];
        return $a;
    }
}

function getCategorieCapteur($id_controleur){
    global $bdd;
    $categorie = $bdd->query("SELECT categorie FROM controleur WHERE controleur.ID ='$id_controleur'");
    while ($liste = $categorie -> fetch()){
        $a = $liste['categorie'];
        return $a;
    }
}



function getValuesProgrammationCapteur($id_capteur){
    global $bdd;
    $listeValeursProgrammationCapteurs = $bdd->query("SELECT * FROM programmation p 
INNER JOIN (SELECT programmation.ID_controleur, MAX(programmation.date_execution) 
AS maxdate FROM programmation WHERE programmation.ID_controleur = '$id_capteur' 
GROUP BY programmation.ID_controleur) last_p ON p.ID_controleur = '$id_capteur' AND p.date_execution = last_p.maxdate");

    while ($liste = $listeValeursProgrammationCapteurs -> fetch()){
        $a = $liste['donnee'];
        return $a;
    }

}


?>
