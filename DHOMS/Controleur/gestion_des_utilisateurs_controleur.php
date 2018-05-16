<?php
/*
//$email = $_POST['email'];
	
					
	                    include "../Modele/attempt2.php";
	                    

                    include "../../DHOMS/Vue/gestion_des_util_vues.php";
						
										$req = getinfo($email);
												
												 print_r($req);
					

	*/

?>

<?php

include "../Modele/gestion_utilisateurs_modele.php";

$utilisateur = getUtilisateur();
$listeUtilisateur = $utilisateur->fetchall();

include "../Vue/gestion_utilisateurs_vue.php";

?>
