<?php

include "../Modele/tableau_bord_modele.php";


$test2 = $_GET['valeur'];
if($test2 != null){
    $capteurs = getCapteur($test2);
    include "../Vue/capteur_vue.php";
}


?>
