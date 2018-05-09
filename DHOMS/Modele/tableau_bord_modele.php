<?php

include "connect_database_modele.php";


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

?>
