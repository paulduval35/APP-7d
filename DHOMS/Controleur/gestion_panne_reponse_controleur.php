<?php

include "../Modele/gestion_panne_modele.php";

$Objet = getMessage();
$listeObjet = $Objet->fetchall();

include "../Vue/gestion_panne_reponse_vue.php";

?>