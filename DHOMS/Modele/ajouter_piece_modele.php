<?php

global $bdd;
include "connect_database_modele.php";
function insertPiece($nom,$surface,$IDmaison){
      global $bdd;
$query = $bdd->prepare ("INSERT INTO piece(nom, surface, ID_habitation) VALUES (:nom,:surface,:IDmaison)") ;
$query->execute(array(
    'nom' =>$nom,
    'surface' => $surface,
    'IDmaison' => $IDmaison,
));
}
?>