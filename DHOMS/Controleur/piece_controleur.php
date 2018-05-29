<?php
/**
 * Created by IntelliJ IDEA.
 * User: epida
 * Date: 18/05/2018
 * Time: 16:34
 */
include "../Modele/tableau_bord_modele.php";
$idmaison = $_GET['valeur'];

$idpiece = getPieces($idmaison);

include "../Vue/piece_vue.php";


?>