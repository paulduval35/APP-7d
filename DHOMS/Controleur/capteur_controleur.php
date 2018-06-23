<?php

include "../Modele/tableau_bord_modele.php";

if (isset($_GET['valeur'])){
    $idpiece = $_GET['valeur'];
}

$capteurs = getCapteur($idpiece);
include "../Vue/capteur_vue.php";

?>