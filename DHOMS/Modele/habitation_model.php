<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=dhoms;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère le contenu de la table habitation


//------------------------------------------------------------------------------------------------------------------------------------------------

function getMaisons($ID_personne_connectee){
    global $bdd;
    $listeMaisons = $bdd->query("SELECT * FROM habitation INNER JOIN appartenance_maison ON habitation.ID = appartenance_maison.ID_habitation WHERE appartenance_maison.ID_personne = '$ID_personne_connectee'");

    return $listeMaisons;
}

//affichage des maisons d'un propriétaire
while ($donnees = $reponse->fetch())
{
    echo $donnees['nom'] . '<br />';
}
$reponse->closeCursor();

echo $donnees['nom'];


//------------------------------------------------------------------------------------------------------------------------------------------------



?>