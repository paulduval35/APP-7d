<?php
session_start();
/**
 * Created by IntelliJ IDEA.
 * User: epida
 * Date: 04/05/2018
 * Time: 10:24
 */

include "../Modele/connexion_inscription_modele.php";
include "url.php";


//Initialisation des variables

$email="";
$email_confirmation="";

$email = $_POST['email'];
$email_confirmation=$_POST['emailconfirmation'];
$mdp = $_POST['mdp'];
$mdp2 = $_POST['mdp2'];

$nb_email="";
$nb_email = check_pseudo($email);
//echo $nb_email;

$mdplenght = strlen($_POST['mdp']);

if (isset($_POST['CGU']))
{
    if (!empty($email) AND !empty($email_confirmation) AND !empty($mdp) AND !empty($mdp2))
    {
        if($mdplenght >=8)
        {
            if($_POST['mdp'] == $_POST['mdp2'])
            {
                if($email==$email_confirmation)
                {
                    if($nb_email!=NULL)
                    {
                        include "../Vue/connexion_inscription_vue.php";
                        echo 'Votre email existe déjà dans notre base de données !!!';

                    } else {
                        $mot_de_passe = password_hash($mdp, PASSWORD_BCRYPT);
                        sendData($email,$mot_de_passe);
                        $_SESSION['ID']=getID($email);
                        $url = $DHOMS_URL."/Controleur/tableau_bord_controleur.php";
                        header('Location:'.$url);
                    }
                }

            }
        }
    }

}

if($mdplenght < 8) {
    ?>
    <div class="pb_taille_mdp">
        <?php echo 'Votre mot de passe doit contenir au moins 8 caractères'; ?>
    </div>
    <?php
}
?>

<?php

if($mdp != $mdp2)
{
    if($email !== $email_confirmation) {
        ?>
        <div class="pb_confirmation">
            <?php echo "Votre email ou votre mot de passe n'est pas correct"; ?>
        </div>
        <?php
    }
}
?>

<?php

if(isset($_POST['CGU']) == NULL) {
    ?>
    <div class="pb_CGU">
        <?php echo "Veuillez accepter les CGU"; ?>
    </div>
    <?php
}
?>

