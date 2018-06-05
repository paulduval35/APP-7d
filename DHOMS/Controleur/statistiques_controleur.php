<?php

include "../Modele/statistiques_modele.php";

$ref=getInfoControleur();
$liste_ref = $ref->fetchall();

include "../Vue/statistiques_vue.php"

?>


