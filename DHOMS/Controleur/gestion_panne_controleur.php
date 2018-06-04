<?php

include "../Modele/gestion_panne_modele.php";

$message = getMessage();
$listeMessage = $message->fetchall();

include "../Vue/gestion_panne_vue.php";

?>
