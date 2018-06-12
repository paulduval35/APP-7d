<?php

include "../Modele/statistiques_modele.php";

$categorie=getInfoControleur();
$liste_categorie = $categorie->fetchall();

$nbPersonneCo=getNombreConnecte();

include "../Vue/statistiques_vue.php"

?>


