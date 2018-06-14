<?php

include "../Modele/gestion_panne_modele.php";

$reponse=$_POST['reponse'];

panne_reponse($_POST['menu_destination']);

include "../Vue/gestion_panne_vue.php";

?>