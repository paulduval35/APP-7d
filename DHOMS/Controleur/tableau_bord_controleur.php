<?php

include "../Modele/tableau_bord_modele.php";

$maisons = getMaisons(1);
$listeMaison = $maisons->fetchall();




include "../Vue/espace_client_connecte_vue.php";

?>
