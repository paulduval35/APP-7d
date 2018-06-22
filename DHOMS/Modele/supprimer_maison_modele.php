<?php
global $bdd;
include "connect_database_modele.php";



function supprimerMaison($ID_personne){//ressort la liste des maisons d'une personne
    global $bdd;

    $query = $bdd->prepare("SELECT habitation.ID,habitation.nom FROM habitation JOIN appartenance_maison ON habitation.ID = appartenance_maison.ID_habitation WHERE appartenance_maison.ID_personne = '$ID_personne'");
    $query->execute();

    return $query;
}



function removeMaison($ID){
    global $bdd;

    $query = $bdd->prepare("DELETE * FROM habitation WHERE habitation.ID = '$ID'");
    $query->execute();
}

?>