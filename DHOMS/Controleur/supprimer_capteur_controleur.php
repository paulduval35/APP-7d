<?php
include "../Modele/gerer_capteur_modele.php";


		$ID = $_POST["ID_piece"];

		 removeCapteur($ID);
		//include "../Vue/supprimer_utilisateurs_recherche_vue.php"; 
?>
		<script language="javascript">
		alert( "Capteur effacé")


</script>
<script>window.location.href = "../Controleur/tableau_bord_controleur.php";</script>

	
