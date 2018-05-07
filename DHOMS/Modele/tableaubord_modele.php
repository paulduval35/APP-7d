<?php
/**
 * Created by IntelliJ IDEA.
 * User: epida
 * Date: 07/05/2018
 * Time: 10:43
 */

include "connect_database_modele.php";



function getPieces($id_maison){
    global $bdd;
    $listePiece = $bdd->query("SELECT piece.ID FROM Piece WHERE piece.ID_habitation = '$id_maison'");

    return $listePiece;
}




?>