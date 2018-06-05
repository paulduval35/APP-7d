<?php
session_start();
include "../Modele/tableau_bord_modele.php";


if (isset($_SESSION['ID'])) {


    $maisons = getMaisons($_SESSION['ID']);
    $listeMaison = $maisons->fetchall();


    $arrayMaison = array();
    foreach ($listeMaison as $maison) {
        $arrayMaison[] = $maison['ID'];
    };

    $IDmaison = $arrayMaison[0];


    if (isset($_GET['valeur'])) {
        $test = $_GET['valeur'];
        $valeur = getPieces($test);

        while ($affichage = $valeur->fetch()) {
            echo $affichage['nom'];
        }
    };

    include "../Vue/tableau_bord_vue.php";

}

else{
    header('Location: http://localhost:63342/site_app/APP-7d/DHOMS/Vue/connexion_inscription_vue.php');
}
