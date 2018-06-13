<?php

global $bdd;
include "connect_database_modele.php";
function insertPiece($nom,$surface,$IDmaison){
      global $bdd;

  

$query = $bdd->prepare ("INSERT INTO `piece`(`nom`, `surface`, `ID_habitation`) VALUES (?,?,?)") ; 
$query->execute([$nom, $surface, $IDmaison]);
return true;

}
?>