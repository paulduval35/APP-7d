<?php

include "connect_database_modele.php";

function getPieces($id_maison){
    global $bdd;
    $listePiece = $bdd->query("SELECT * FROM Piece WHERE piece.ID_habitation = '$id_maison'");
    return $listePiece;
}

?>
