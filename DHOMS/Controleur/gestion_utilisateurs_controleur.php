<?php
GLOBAL $email;
$email= $_POST["email"];
include "../Modele/supprimer_utilisateurs_modele.php";



$utilisateur= getUtilisateur($email);
//$listeUtilisateur = $utilisateur->fetchall();

include "../Vue/supprimer_des_util_vues.php";
?>	
<script src = "../Vue/jquery-3.2.1.js"></script>

<?php
if ($_POST['buttondel']){
		$email= $_POST["email"];
		if ($email != ""){

		delUtilisateur($email);
		include "../Vue/supprimer_utilisateurs_recherche_vue.php"; 

		echo '<script language="javascript">';
		echo 'alert( "Utilisateur effacé")';
		
echo '</script>';
echo '<script>window.location.href = "../Vue/supprimer_utilisateurs_recherche_vue.php";</script>';
		exit();}

} 

?>

