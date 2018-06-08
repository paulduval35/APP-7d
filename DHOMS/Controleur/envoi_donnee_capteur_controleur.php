<?php

include "../Modele/tableau_bord_modele.php";

if(isset($_POST['valeur_prog'])){
    $valeur = $_POST['valeur_prog'];
}
else {
    $valeur = "off";
}

$ID_capteur = $_POST['ID_capteur'];

postValeurProgrammationControleur($ID_capteur,$valeur);

?>

<script>window.location.href = "../Controleur/tableau_bord_controleur.php";</script>

<?php

?>