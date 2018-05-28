<?php

include "Connect_database_modele.php";

function contact_message($bdd) {

    $today = date("Y-m-d H:i:s");

    $req = $bdd->prepare('INSERT INTO message(objet, date, message) VALUES(:objet, :date, :message)');

    $req->execute(array(
        'objet' => $_POST['objet'],
        'date' => $today,
        'message' => $_POST['message']
    ));
 }

?>