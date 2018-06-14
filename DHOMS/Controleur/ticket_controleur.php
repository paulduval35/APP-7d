<?php

include "../Modele/ticket_modele.php";

$message = getMessage();
$listeMessage = $message->fetchall();

include "../Vue/ticket_vue.php";

?>