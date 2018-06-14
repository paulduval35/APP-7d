<?php

include "connect_database_modele.php";

function getMessage(){
    global $bdd;
    $reponse = $bdd->query("SELECT DISTINCT objet, date, message, reponse FROM message");
    return $reponse;
}

function panne_reponse($retourTitre) {
    include "connect_database_modele.php";
    global $bdd;
    $req = $bdd->prepare("INSERT INTO message(reponse) VALUE(:reponse) WHERE titre = '$retourTitre'");
    $req->execute(array(
        'reponse' => $_POST['reponse'],
    ));
}

?>