<?php
include "../Modele/gerer_capteur_modele.php";


		$ID = $_POST["ID_capteur"];

		removeCapteur($ID);
?>

<script>window.location.href = "../Controleur/tableau_bord_controleur.php";</script>*

