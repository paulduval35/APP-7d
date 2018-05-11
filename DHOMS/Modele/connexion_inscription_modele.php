<?php
/**
 * Created by IntelliJ IDEA.
 * User: epida
 * Date: 04/05/2018
 * Time: 11:06
 */


    try {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=dhoms;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }


function getData($email)
{
    include "connect_database_modele.php";
    $req = $bdd->prepare("SELECT ID, mot_de_passe FROM personne WHERE email = '.$email'");
    $req->execute(array(
        'email' => $email));
    $resultat = $req->fetch();
    return $resultat;

}

function sendData($email, $mot_de_passe)
{
    include "connect_database_modele.php";
    $req = $bdd->prepare("INSERT INTO personne(email,mot_de_passe) VALUES(:email,:mot_de_passe)");
    $req->execute(array(
        'email' => $email,
        'mot_de_passe' => $mot_de_passe,
    ));
}


?>