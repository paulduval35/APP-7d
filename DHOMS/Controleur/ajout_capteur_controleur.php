<?php
$piece=2;
$capteur = $_POST['subject'];
$etat='éteint';

include "../Modele/ajout_capteur_modele.php";
$result = insertCapteur($capteur,$piece);

echo '<script language="javascript">';
		echo 'alert( "le capteur a été ajouté")';
		
echo '</script>';

echo '<script>window.location.href = "../Controleur/tableau_bord_controleur.php";</script>';


?>