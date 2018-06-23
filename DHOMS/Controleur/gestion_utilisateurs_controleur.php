<?php session_start();?>
<?php include "../Controleur/url.php"?>
<?php if (!isset($_SESSION['statut'][0])){
    $_SESSION['statut'][0]='a';
}?>
<?php if ($_SESSION['statut'][0]=="Admin"):?>

<?php
GLOBAL $email;
$email= $_POST["email"];
include "../Modele/supprimer_utilisateurs_modele.php";

$utilisateur= getUtilisateur($email);

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

<?php endif;?>
<?php if ($_SESSION['statut'][0] != "Admin"){
    header('Location:'.$DHOMS_URL."/Controleur/tableau_bord_controleur.php");
}