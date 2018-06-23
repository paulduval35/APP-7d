<?php session_start();?>
<?php include "../Controleur/url.php"?>
<?php if (!isset($_SESSION['statut'][0])){
    $_SESSION['statut'][0]='a';
}?>
<?php if ($_SESSION['statut'][0]=="Admin"):?>

<?php

include "../Modele/statistiques_modele.php";

$categorie=getInfoControleur();
$liste_categorie = $categorie->fetchall();

$nbPersonneCo=getNombreConnecte();

include "../Vue/statistiques_vue.php"

?>

<?php endif;?>
<?php if ($_SESSION['statut'][0] != "Admin"){
    header('Location:'.$DHOMS_URL."/Controleur/tableau_bord_controleur.php");
}