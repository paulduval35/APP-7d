<?php
$piece=$_POST['ID_piece'];
$capteur = $_POST['subject'];
$etat='éteint';
include "../Modele/gerer_capteur_modele.php";
include "../Vue/ajout_capteur_vue_2.php";
?>