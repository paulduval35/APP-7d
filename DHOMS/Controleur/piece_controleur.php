<?php
/**
 * Created by IntelliJ IDEA.
 * User: epida
 * Date: 18/05/2018
 * Time: 16:34
 */
include "../Modele/tableau_bord_modele.php";
$test = $_GET['valeur'];
$valeur = getPieces($test);

include "../Vue/piece_vue.php";


?>