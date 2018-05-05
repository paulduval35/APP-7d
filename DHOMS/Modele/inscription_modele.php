<?php
/**
 * Created by IntelliJ IDEA.
 * User: epida
 * Date: 04/05/2018
 * Time: 11:06
 */

function ajouter_membre_dans_bdd($nom, $prenom, $statut,$numfixe,$nummobile,$email, $mdp, $forfait, $etat, $id_parent, $id_adresse){
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

    $requete = $bdd->prepare('INSERT INTO personne(nom, prenom, statut, numfixe, nummobile, email, mdp, forfait, etat, id_parent, id_adresse) 

    VALUES(:nom, :prenom, :statut, :numfixe, :nummobile, :email, :mdp, :forfait, :etat, :id_parent, :id_adresse )');
    $bdd->bindParam(':nom',nom);
    $bdd->bindParam(':prenom', prenom);

}

?>