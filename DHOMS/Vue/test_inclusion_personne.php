<?php
/**
 * Created by PhpStorm.
 * User: paulduval
 * Date: 07/05/2018
 * Time: 15:10
 */


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

$ID='';
$nom = '';
$prenom = '';
$statut = '';
$num_fixe = '';
$num_mobile = '';
$email = '';
$mot_de_passe = '';
$forfait = '';
$etat = '';
$ID_parent = '';
$ID_adresse = '';

$nom = 'wallou';
$prenom = 'wallah';
$statut = 'boss';
$num_fixe = 0154433322;
$num_mobile = 474376476;
$email = 'aezdd@dfsf.com';
$mot_de_passe = 'azertyuiop';
$forfait = 'merde';
$etat = 'connecte';
$ID_parent = 8;
$ID_adresse = 9;

$req = $bdd->prepare('INSERT INTO personne(ID, nom, prenom, statut, num_fixe, num_mobile, email, mot_d)e_passe, forfait, etat, ID_parent, ID_adresse) VALUES(:ID,:nom, :prenom, :statut, :num_fixe, :num_mobile, :email, :mot_de_passe, :forfait, :etat, :ID_parent, :ID_adresse');
$req->execute(array(
    'ID' =>$ID,
    'nom' => $nom,
    'prenom' => $prenom,
    'statut' => $statut,
    'num_fixe' => $num_fixe,
    'num_mobile' => $num_mobile,
    'email' => $email,
    'mot_de_passe' => $mot_de_passe,
    'forfait' => $forfait,
    'etat' => $etat,
    'ID_parent' => $ID_parent,
    'ID_adresse' => $ID_adresse,
));


$ID ='';
$ID_personne='';
$ID_habitation='';

$ID_personne = 9;
$ID_habitation =23;


$req = $bdd->prepare('INSERT INTO appartenance_maison(ID, ID_personne, ID_habitation) VALUES(:ID,:ID_personne, :ID_habitation)');
$req->execute(array(
    'ID'=> $ID,
    'ID_personne'=> $ID_personne,
    'ID_habitation'=>  $ID_habitation,
));

