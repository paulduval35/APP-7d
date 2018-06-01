<?php
/**
 * Created by IntelliJ IDEA.
 * User: epida
 * Date: 28/05/2018
 * Time: 11:17
 */

include '../Modele/tableau_bord_modele.php';

$value = getValuesProgrammationCapteur($_POST['valeur']);

echo $value;

?>