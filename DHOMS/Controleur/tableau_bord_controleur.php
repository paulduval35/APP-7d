<?php

include "../Modele/tableau_bord_modele.php";

$maisons = getMaisons(1);
$listeMaison = $maisons->fetchall();



$arrayMaison = array();
foreach ($listeMaison as $maison){
    $arrayMaison[] = $maison['ID'];
}

$IDmaison = $arrayMaison[0];


if(isset($_GET['valeur'])){
    $test = $_GET['valeur'];
    $valeur = getPieces($test);

    while($affichage = $valeur->fetch()){
        echo $affichage['nom'];
    }
}


require_once "../Vue/tableau_bord_vue.php";



?>
