<?php session_start();?>
<?php include "../Controleur/url.php"?>
<?php if (!isset($_SESSION['statut'][0])){
    $_SESSION['statut'][0]='a';
}?>
<?php if ($_SESSION['statut'][0]=="Admin"):?>

<?php
include "../Modele/faq_modele.php";
include "../Vue/modifier_faq.php";
?>

<?php endif;?>
<?php if ($_SESSION['statut'][0] != "Admin"){
    header('Location:'.$DHOMS_URL."/Controleur/tableau_bord_controleur.php");
}



