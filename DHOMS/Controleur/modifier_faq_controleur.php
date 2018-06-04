<?php
/**
 * Created by PhpStorm.
 * User: paulduval
 * Date: 30/05/2018
 * Time: 11:58
 */


include "../Modele/faq_modele.php";
include "../Vue/modifier_faq.php";

$nvtitre = isset($_POST['nvtitre']) ? $_POST['nvtitre'] : NULL;
$nvreponse = isset($_POST['nvreponse']) ? $_POST['nvreponse'] : NULL;


ajouterFAQ($nvtitre,$nvreponse);

$retourTitre = isset($_POST['abc']) ? $_POST['abc'] : NULL;


if(isset($retourTitre))
{
    deleteFAQ($retourTitre);
    include "../Controleur/faq_controleur.php";
}

