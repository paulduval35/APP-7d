<?php

session_start();

if(isset($_SESSION['ID'])) {
    if ($_SESSION['statut']=="Admin") {

        include "../Modele/faq_modele.php";

        if (isset($_POST['menu_destination'])) {
            deleteFAQ($_POST['menu_destination']);
            header('Location:../Controleur/modifier_faq_controleur.php');
        }
    }
}