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

// On récupère tout le contenu de la table habitation
$reponse = $bdd->query('SELECT * FROM habitation');


//Pour insérer des habitations
$req = $bdd->prepare('INSERT INTO habitation(ID, nom, surface, ID_adresse) VALUES(:ID,:nom, :surface, :ID_adresse)');
$req->execute(array(
    'ID' =>$ID,
    'nom' => $nom,
    'surface' => $surface,
    'ID_adresse' => $ID_adresse,
));



?>