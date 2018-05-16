<?php

include "connect_database_modele.php";

function getActionneur(){
    global $bdd;
    $reponse = $bdd->query("SELECT DISTINCT categorie, reference FROM controleur");
    return $reponse;
}

?>
