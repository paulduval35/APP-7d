<?php

include "../Modele/tableau_bord_modele.php";

$IDmaison = $_GET['valeur'];

$idpiece = getPieces($IDmaison);

include "../Vue/piece_vue.php";


?>