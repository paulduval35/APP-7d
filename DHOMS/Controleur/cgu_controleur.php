<?php session_start();?>
<?php include "../Controleur/url.php"?>
<?php if (!isset($_SESSION['statut'][0])){
    $_SESSION['statut'][0]='a';
}?>
<?php if ($_SESSION['statut'][0]=="Admin"):?>

<?php

include "../Modele/cgu_modele.php";

$cgu= getCGU();
$texte_cgu = $cgu->fetchall();

include "../Vue/modification_cgu_vue.php"

?>

<?php endif;?>
<?php if ($_SESSION['statut'][0] != "Admin"){
    header('Location:'.$DHOMS_URL."/Controleur/tableau_bord_controleur.php");
}