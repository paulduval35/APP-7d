<?php

include "../Modele/gestion_panne_modele.php";

$reponse=$_POST['reponse'];
panne_reponse($_POST['menu_destination'], $reponse);

include "../Vue/accueil_admin_vue.php";

?>