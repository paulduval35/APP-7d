<?php
include "connect_database_modele.php";


function getUtilisateur($email){
   global $bdd;
   
   $query = $bdd->prepare("SELECT `personne`.`prenom` FROM `personne` WHERE `personne`.`email` = '$email'");
   
$query->execute();

$row = $query->fetch();

echo $row['prenom'];
	

?>