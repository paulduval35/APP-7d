<?php
$piece=$_POST['ID_piece'];
$capteur = $_POST['capteur'];
$numero_serie = $_POST['serie'];
$etat='éteint';

include "../Modele/ajout_capteur_modele.php";
insertCapteur($capteur,$piece,$numero_serie);

?>

<script language="javascript">;

window.location.href = "../Controleur/tableau_bord_controleur.php";

</script>
