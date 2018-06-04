<?php
/**
 * Created by PhpStorm.
 * User: paulduval
 * Date: 04/05/2018
 * Time: 11:20
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

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table habitation
$reponse = $bdd->query('SELECT * FROM habitation');



// Initialiation des variables

$ID_adresse="";
$ID_habitation="";
$ID_pays="";
$ID_ville="";
$ID_appartenance_habitation="";
$ID_personne="";


$nom_habitation =  $_POST['nom_habitation'];
$surface = $_POST['surface'];
$num_rue = $_POST['num_rue'];
$rue = $_POST['rue'];
$code_postal = $_POST['code_postal'];
$pays = $_POST['pays'];
$ville = $_POST['ville'];


//on envoie les données grâce au modele

        include "../Modele/habitation_modele.php";
        include "../Vue/validation_habitation.php";




?>