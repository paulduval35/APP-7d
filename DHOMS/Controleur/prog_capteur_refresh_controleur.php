<?php

include '../Modele/tableau_bord_modele.php';

$value = getValuesProgrammationCapteur($_POST['valeur']);

echo $value;

?>