    <?php
/**
 * Created by PhpStorm.
 * User: paulduval
 * Date: 09/05/2018
 * Time: 11:52
 */

if(!empty($_POST['reste_connecte']))
{
    session_start();
}

include "url.php";

include "../Modele/connexion_inscription_modele.php";


$bouton=isset($_POST['bouton']) ? $_POST['bouton'] : NULL;
$mdpoublie ="";
$mdpoublie=isset($_POST['mdpoublie']) ? $_POST['mdpoublie'] : NULL;

$mdp = isset($_POST['mdp']) ? $_POST['mdp'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;

var_dump($mdpoublie);

if(isset($bouton))
{
    $email="";
    $mdp="";
    $mdp = $_POST['mdp'];
    $email = $_POST['email'];
    getConnexion($email);

    if (password_verify($mdp,getConnexion($email))===true)
    {
        include "../Vue/espace_client_connecte_vue.php";
    } else {
        include "../Vue/connexion_inscription_vue.php";
    }
}


$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$subject='Mot de passe oublié DHOMS';
$message='Changement du mot de passe' ?><a href="../Vue/changement_mdp.php">Changer votre mot de passe</a><?php;
mail($email,$subject,$message);

/*elseif(isset($_POST['go']) AND $_POST['go'] == 'Mot de passe oublié')
{
    //echo "<script type=\"text/javascript\"> alert(\"Un mail vous a été envoyé\"); </script>";
    $email = isset($_POST['email']) ? $_POST['email'] : NULL;
    $subject='Mot de passe oublié DHOMS';
    $message='Changement du mot de passe' ?><a href="../Vue/changement_mdp.php">Changer votre mot de passe</a><?php;
    mail($email,$subject,$message);
}

else {
    include '../Vue/connexion_inscription_vue.php';
}*/


?>