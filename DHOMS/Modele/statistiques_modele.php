<?php
include "connect_database_modele.php";

function getInfoControleur(){
    global $bdd;
    $reponse = $bdd->query("SELECT categorie FROM controleur");
    return $reponse;
}

function getNombreConnecte(){
    global $bdd;
    $reponse = $bdd->query("SELECT count(*) AS total FROM personneconnecte");
    return $reponse;
}
?>