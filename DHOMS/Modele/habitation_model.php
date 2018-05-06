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



// Initialiation des variables


//Pour insérer des habitations
$req = $bdd->prepare('INSERT INTO habitation(ID, nom, surface, ID_adresse) VALUES(:ID,:nom, :surface, :ID_adresse)');
$req->execute(array(
    'ID' =>$ID_habitation,
    'nom' => $nom_habitation,
    'surface' => $surface,
    'ID_adresse' => $ID_adresse,
));



$req = $bdd->prepare('INSERT INTO adresse(ID, num_rue, rue, etage, num_appartement, code_postal, ID_ville, ID_pays) VALUES(:ID,:num_rue,:rue,:etage,:num_appartement,:code_postal,:ID_ville,:ID_pays)');
$req->execute(array(
    'ID'=>$ID_adresse,
    'num_rue'=>$num_rue,
    'rue'=>$rue,
    'etage'=>$etage,
    'num_appartement'=>$num_appartement,
    'code_postal'=>$code_postal,
    'ID_ville'=>$ID_ville,
    'ID_pays'=>$ID_pays,
));


$req = $bdd->prepare('INSERT INTO pays(ID, pays) VALUES(:ID,:pays)');
$req->execute(array(
    'ID'=>$ID_pays,
    'pays'=>$pays,
));

$req = $bdd->prepare('INSERT INTO ville(ID, nom) VALUES(:ID,:nom)');
$req->execute(array(
    'ID'=>$ID_ville,
    'nom'=>$ville,
));

?>