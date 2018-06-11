<?php
$piece=$_POST['ID_piece'];
$capteur = $_POST['subject'];
$etat='éteint';

include "../Modele/ajout_capteur_modele.php";
$result = insertCapteur($capteur,$piece);

?>

<script language="javascript">;

window.location.href = "../Controleur/tableau_bord_controleur.php";

</script>
