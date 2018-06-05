<?php

include "../Modele/cgu_modele.php";

$texte_cgu=$_POST['texte_cgu'];

modif_cgu($bdd);

include "../Vue/accueil_admin_vue.php";


?>


