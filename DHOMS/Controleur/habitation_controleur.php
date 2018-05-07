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
$ID="";
$ID_adresse="";
$ID_habitation="";
$ID_pays="";
$ID_ville="";


$nom_habitation =  !empty($_POST['nom_habitation']) ? $POST_['nom_habitation'] : NULL;
$surface = isset($_POST['surface']) ? $_POST['surface'] : NULL;
$num_rue = isset($_POST['num_rue']) ? $_POST['num_rue'] : NULL;
$rue = isset($_POST['rue']) ? $_POST['rue'] : NULL;
$etage = isset($_POST['etage']) ? $_POST['etage'] : NULL;
$num_appartement = isset($_POST['num_appartement']) ? $_POST['num_appartement'] :NULL;
$code_postal = isset($_POST['code_postal']) ? $_POST['code_postal'] : NULL;
$pays = isset($_POST['pays']) ? $_POST['pays'] : NULL;
$ville = isset($_POST['ville']) ? $_POST['ville'] : NULL;


//on envoie les données grâce au modele

if($nom_habitation != NULL AND $surface != NULL AND $num_rue != NULL AND $rue != NULL AND $etage != NULL AND $num_appartement != NULL AND $code_postal != NULL AND $ville != NULL AND $pays != NULL )
{
    if(isset ($POST['CGU']))
    {
        include "/Applications/XAMPP/xamppfiles/htdocs/DHOMS/Modele/habitation_modele.php";
    }
}

include "/Applications/XAMPP/xamppfiles/htdocs/DHOMS/Vue/validation_habitation.php";


?>