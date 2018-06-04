<?php
include "connect_database_modele.php";

    function getCGU(){
        global $bdd;
        $reponse = $bdd->query("SELECT texte_cgu FROM cgu WHERE id = (SELECT MAX(id) FROM cgu)");
        return $reponse;
    }

?>