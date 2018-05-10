<?php
/**
 * Created by IntelliJ IDEA.
 * User: epida
 * Date: 04/05/2018
 * Time: 10:24
 */


//include "../Vue/connexion_inscription_vue.php";




//Initialisation des variables

$email="";
$email_confirmation="";
$mot_de_passe_hash="";
$mot_de_passe_confirmation_hash="";




$email = $_POST['email'];
$email_confirmation=$_POST['emailconfirmation'];
$mot_de_passe = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
$mot_de_passe_confirmation = password_hash($_POST['mdp2'], PASSWORD_DEFAULT);




if (isset($_POST['CGU']))
{
    if (!empty($email) and !empty($email_confirmation) and !empty($mot_de_passe) and !empty($mot_de_passe_confirmation))
    {
        if(strlen($mot_de_passe >=8))
        {
            if($mot_de_passe == $mot_de_passe_confirmation and $email == $email_confirmation)
            {
                include "../Modele/connexion_inscription_modele.php";
                sendData($email,$mot_de_passe);
            }
        }
    }

}


if(strlen($mot_de_passe) < 8) {
    ?>
    <div class="pb_taille_mdp">
        <?php echo 'Votre mot de passe doit contenir au moins 8 caractères'; ?>
    </div>
    <?php
}
?>

<?php

if($mot_de_passe != $mot_de_passe_confirmation or $email!=$email_confirmation) {
    ?>
    <div class="pb_confirmation">
        <?php echo "Votre email ou votre mot de passe n'est pas correct"; ?>
    </div>
    <?php
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

