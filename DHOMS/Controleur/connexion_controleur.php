<?php
/**
 * Created by PhpStorm.
 * User: paulduval
 * Date: 09/05/2018
 * Time: 11:52
 */


session_start();

include "../Modele/connexion_inscription_modele.php";
//include "../Vue/connexion_inscription_vue.php";


$email = $_POST['email'];
getData($email);

$isPasswordCorrect = password_verify($_POST['mdp'], $resultat['mot_de_passe']);
$email = $_POST['email'];

if(!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe';
}
else
{
    if($isPasswordCorrect)
    {
        session_start();
        $_SESSION['ID'] = $resultat['ID'];
        $_SESSION['email'] = $email;
        echo 'Vous êtes connecté !';
    } else {
        echo 'Mauavais identifiant ou mot de passe';
}
}
