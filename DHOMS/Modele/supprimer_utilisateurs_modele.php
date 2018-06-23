<?php
include "connect_database_modele.php";

function getListeUtilisateur(){
    global $bdd;
    $query = $bdd->prepare("SELECT * FROM `personne`");
    $query->execute();
    return $query;
}

function getUtilisateur($email){
    global $bdd;
    $query = $bdd->prepare("SELECT * FROM `personne` WHERE `personne`.`email` = '$email'");
    $query->execute();
    $row = $query->fetch();
    $row['nom'];
    return $row;
}

function delUtilisateur($email){
	global $bdd;
	$query = $bdd->prepare("DELETE  FROM `personne` WHERE email = '$email'");
	$query->execute();
    return True;
}
?>