<?php
include "../Modele/ajout_capteur_modele.php";


		$ID = $_POST["pieceselect"];

		 removeCapteur($ID);
		//include "../Vue/supprimer_utilisateurs_recherche_vue.php"; 

		echo '<script language="javascript">';
		echo 'alert( "Capteur effacé")';
		
echo '</script>';
echo '<script>window.location.href = "../Controleur/tableau_bord_controleur.php";</script>';
		


?>
	
