<?php

include "../Modele/gestion_utilisateurs_modele.php";

$utilisateur = getUtilisateur();
$listeUtilisateur = $utilisateur->fetchall();

include "../Vue/gestion_utilisateurs_vue.php";

?>
