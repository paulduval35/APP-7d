<?php
$piece=2;
$capteur = $_POST['subject'];


include "../Modele/ajout_capteur_modele.php";
$result = insertCapteur($capteur,$piece);



?>