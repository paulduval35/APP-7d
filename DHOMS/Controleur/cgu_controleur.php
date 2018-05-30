<?php

include "../Modele/cgu_modele.php";

$cgu= getCGU();
$texte_cgu = $cgu->fetchall();

include "../Vue/modification_cgu_vue.php"

?>


