<?php
include "connect_database_modele.php";

function getCGU(){
    global $bdd;
    $reponse = $bdd->query("SELECT texte_cgu FROM cgu WHERE id = (SELECT MAX(id) FROM cgu)");
    return $reponse;
}

function modif_cgu($bdd) {

    $today = date("Y-m-d H:i:s");

    $req = $bdd->prepare('INSERT INTO cgu (date_modification, texte_cgu) VALUES(:date_modification, :texte_cgu)');

    $req->execute(array(
        'date_modification' => $today,
        'texte_cgu' => $_POST['texte_cgu']
    ));
}

?>