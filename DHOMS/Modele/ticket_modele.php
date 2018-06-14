<?php

include "connect_database_modele.php";

function getMessage(){
    global $bdd;
    $reponse = $bdd->query("SELECT DISTINCT objet, date, message, reponse FROM message");
    return $reponse;
}

?>