<?php

include "connect_database_modele.php";

function insertCapteur($value,$piece){
   global $bdd;
   
   $query = $bdd->prepare("SELECT categorie, `type`, ID, reference FROM capteur WHERE `capteur`.`reference` = '$value'");
   
$query->execute();
$row = $query->fetch();

$ID=$row['ID'];
$type=$row['type'];
$categorie=$row['categorie'];
echo $type;
echo $categorie;
echo $ID;


   
  // $query = $bdd->prepare("insert $value INTO `controleur` WHERE `capteur`.`reference` = '$s'");
 $val=[   'ID' => $ID,
    'type' => $type,
    'categorie' => $categorie,];
  $query = $bdd->prepare ( "INSERT INTO `controleur` (`categorie`, `type`, `ID_piece`) VALUES (:categorie, :type, '$piece')") ; 
$result = $query->execute();

echo $result['ID_piece'];
return $result;
}





?>