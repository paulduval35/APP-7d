<?php

session_start();

include "../Modele/faq_modele.php";

if(isset($_SESSION['ID'])) {
    if ($_SESSION['statut'] == "Admin") {

        include "../Vue/modifier_faq.php";
    }
}

else{
    header('Location: http://localhost/DHOMS/Vue/connexion_inscription_vue.php');
}




