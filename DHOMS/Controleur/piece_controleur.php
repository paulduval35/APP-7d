<?php
/**
 * Created by IntelliJ IDEA.
 * User: epida
 * Date: 18/05/2018
 * Time: 16:34
 */
include "../Modele/tableau_bord_modele.php";
$IDmaison = $_GET['valeur'];

$idpiece = getPieces($IDmaison);

include "../Vue/piece_vue.php";


?>