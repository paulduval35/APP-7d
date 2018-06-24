<?php
session_start();
include "../Modele/tableau_bord_modele.php";
include "url.php";
include "../Modele/trame_modele.php";

getTrameToDB();
if (isset($_SESSION['ID'])) {


    $maisons = getMaisons($_SESSION['ID']);
    $listeMaison = $maisons->fetchall();




    $arrayMaison = array();
    foreach ($listeMaison as $maison) {
        $arrayMaison[] = $maison['ID'];
    };

    $lenArray = count($arrayMaison);

    if($lenArray > 0) {

        if (isset ($_POST['ID_maison'])){
            $IDmaison = $_POST['ID_maison'];
        }
        else {
            $IDmaison = $arrayMaison[0];
        }



        $pieces = getPieces($IDmaison);

        $idglobal = getGlobal($IDmaison);
        include '../Vue/tableau_bord_vue.php';
    }

    else{
        header("Location:".$DHOMS_URL."/Vue/habitation.php");
    }
}

else{
    header('Location:'.$DHOMS_URL.'/Vue/connexion_inscription_vue.php');
}


