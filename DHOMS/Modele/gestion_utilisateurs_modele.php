<?php

include "connect_database_modele.php";

function getUtilisateur(){
    global $bdd;
    $reponse = $bdd->query("SELECT * FROM personne ");
    return $reponse;
}

?>
