<?php

include "connect_database_modele.php";

function insertCapteur($value,$piece){
   global $bdd;
   
   $query = $bdd->prepare("SELECT categorie, `type`, ID, reference FROM capteur WHERE `capteur`.`reference` = '$value'");
   
$query->execute();
$row = $query->fetch();

$type=$row['type'];
$categorie=$row['categorie'];
echo $type;
echo $categorie;

$query = $bdd->prepare ( "INSERT INTO `controleur` (`categorie`, `type`, `ID_piece`) VALUES (?,?,?)") ; 
$query->execute([$categorie, $type, $piece]);


}





?>