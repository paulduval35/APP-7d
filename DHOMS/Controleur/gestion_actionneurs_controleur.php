<?php

include "../Modele/gestion_actionneurs_modele.php";

$actionneur = getActionneur();
$listeActionneur = $actionneur->fetchall();

include "../Vue/gestion_actionneurs_vue.php";

?>
