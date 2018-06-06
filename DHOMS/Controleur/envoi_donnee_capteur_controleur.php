<?php

include "../Modele/tableau_bord_modele.php";

$ID_capteur = $_POST['ID_capteur'];
$valeur = $_POST['valeur_prog'];
postValeurProgrammationControleur($ID_capteur,$valeur);

?>
<script>window.location.href = "../Controleur/tableau_bord_controleur.php";</script>

<?php

?>