<?php

include "../Modele/statistiques_modele.php";

$categorie=getInfoControleur();
$liste_categorie = $categorie->fetchall();

include "../Vue/statistiques_vue.php"

?>


