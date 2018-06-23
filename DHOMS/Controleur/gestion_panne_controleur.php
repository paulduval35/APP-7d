<?php session_start();?>
<?php include "../Controleur/url.php"?>
<?php if (!isset($_SESSION['statut'][0])){
    $_SESSION['statut'][0]='a';
}?>
<?php if ($_SESSION['statut'][0]=="Admin"):?>

<?php

include "../Modele/gestion_panne_modele.php";

$message = getMessage();
$listeMessage = $message->fetchall();

include "../Vue/gestion_panne_vue.php";

?>

<?php endif;?>
<?php if ($_SESSION['statut'][0] != "Admin"){
    header('Location:'.$DHOMS_URL."/Controleur/tableau_bord_controleur.php");
}