<?php
include "connect_database_modele.php";

function getInfoControleur(){
    global $bdd;
    $reponse = $bdd->query("SELECT reference FROM controleur");
    return $reponse;
}

?>