<?php
include "../Modele/tableaubord_modele.php";
$listePiece = getPieces(2);
$header = 3;
while($donnees = $listePiece->fetch()){
    echo $donnees['ID'];
}
include '../Vue/accueil_connecte_vue.php';
?>
