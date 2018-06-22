<?php
include "../Modele/supprimer_maison_modele.php";


$ID = $_POST["ID_habitation"];

removeMaison($ID);

?>
<script>window.location.href = "../Controleur/tableau_bord_controleur.php";</script>


