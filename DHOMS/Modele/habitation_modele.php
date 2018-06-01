<?php

$reponse = $bdd->query('SELECT * FROM habitation');



// Initialiation des variables


//Pour insérer des habitations
//On check d'abord si le pays existe
if (PaysExiste()){
}
else {
    $req = $bdd->prepare('INSERT INTO pays(ID, pays) VALUES(:ID,:pays)');
    $req->execute(array(
        'ID'=>$ID_pays,
        'pays'=>$pays,
    ));
    $ID_pays = $bdd->lastInsertId();
}

//Puis si la ville existe
if (VilleExiste()){
}
else {
    $req = $bdd->prepare('INSERT INTO ville(ID, nom) VALUES(:ID,:nom)');
    $req->execute(array(
        'ID' => $ID_ville,
        'nom' => $ville,
    ));
    $ID_ville = $bdd->lastInsertId();
}

//On ajoute l'adresse
$req = $bdd->prepare('INSERT INTO adresse(ID, num_rue, rue, code_postal, ID_ville, ID_pays) VALUES(:ID,:num_rue,:rue,:code_postal,:ID_ville,:ID_pays)');
$req->execute(array(
    'ID' => $ID_adresse,
    'num_rue'=>$num_rue,
    'rue'=>$rue,
    'code_postal'=>$code_postal,
    'ID_ville'=>$ID_ville,
    'ID_pays'=>$ID_pays,
));
$ID_adresse = $bdd->lastInsertId();


//et enfin on rajoute l'habitation
$req = $bdd->prepare('INSERT INTO habitation(ID, nom, surface, ID_adresse) VALUES(:ID,:nom, :surface, :ID_adresse)');
$req->execute(array(
'ID' =>$ID_habitation,
'nom' => $nom_habitation,
'surface' => $surface,
'ID_adresse' => $ID_adresse,
));
$ID_habitation = $bdd->lastInsertId();

//On indique ensuite que cette habitation appartient à la personne qui l'a renseignée
$req = $bdd->prepare('INSERT INTO appartenance_maison(ID, ID_personne, ID_habitation) VALUES(:ID,:ID_personne, :ID_habitation)');
$req->execute(array(
    'ID' =>$ID_appartenance_habitation,
    'ID_personne' =>$ID_personne,
    'ID_habitation' =>$ID_habitation,
));





function VilleExiste(){
    global $bdd;
    global $ID_ville;
    global $ville;
    $rechercheVille = $bdd->query("SELECT ID FROM ville WHERE ville.nom='$ville'");
    while ($liste = $rechercheVille->fetch()) {
        $ID_Ville_Bdd = $liste['ID'];
        if ($ID_Ville_Bdd != "") {
            $ID_ville = $ID_Ville_Bdd;
            return true;
        }
        return false;
    }
}

function PaysExiste()
{
    global $bdd;
    global $ID_pays;
    global $pays;
    $recherchePays = $bdd->query("SELECT ID FROM pays WHERE pays.nom='$pays'");
    while ($liste = $recherchePays->fetch()) {
        $ID_Pays_Bdd = $liste['ID'];
        if ($ID_Pays_Bdd != "") {
            $ID_pays = $ID_Pays_Bdd;
            return true;
        }
        return false;
    }
}

?>