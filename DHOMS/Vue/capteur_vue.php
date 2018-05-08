<?php
while($piece = $listePiece->fetch()){
    if($piece['nom']=="cuisine"){
        echo "fe";
    }
    else if($piece['nom']=="salle de bain"){
        echo "salle de bain";
    }

}


?>