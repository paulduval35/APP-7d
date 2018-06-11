<?php
/**
 * Created by PhpStorm.
 * User: paulduval
 * Date: 30/05/2018
 * Time: 11:58
 */
session_start();

include "../Modele/faq_modele.php";

if(isset($_SESSION['ID'])) {
    if ($_SESSION['statut'] == "Admin") {

        include "../Vue/modifier_faq.php";
    }
}


else{
    header('Location: http://localhost:63342/site_app/APP-7d/DHOMS/Vue/connexion_inscription_vue.php');
}




