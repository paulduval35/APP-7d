<?php

include "connect_database_modele.php";

function getMessage(){
    global $bdd;
    $reponse = $bdd->query("SELECT DISTINCT objet, date, message FROM message");
    return $reponse;
}

?>