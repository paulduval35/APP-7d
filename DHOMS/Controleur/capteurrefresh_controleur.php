<?php
/**
 * Created by IntelliJ IDEA.
 * User: epida
 * Date: 28/05/2018
 * Time: 11:17
 */

include '../Modele/tableau_bord_modele.php';

$value = getValuesCapteur($_POST['valeur']);
$categorie = getCategorieCapteur($_POST['valeur']);

if($categorie=="Température"){
    echo $value;
?>°C<?php }

if($categorie=="Humidité"){
    echo $value;
?>%<?php } ?>
