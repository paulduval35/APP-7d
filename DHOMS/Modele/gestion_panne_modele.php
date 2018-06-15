<?php

include "connect_database_modele.php";

function getMessage(){
    global $bdd;
    $reponse = $bdd->query("SELECT DISTINCT objet, date, message, reponse FROM message");
    return $reponse;
}

function panne_reponse($retourTitre, $reponse) {
    global $bdd;
    $req = $bdd->query("UPDATE message SET reponse = '$reponse' WHERE objet='$retourTitre'");
}

?>