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
$mdp = htmlentities($_POST['mdp'] ,ENT_QUOTES,"utf-8");
$mot_de_passe = password_hash($mdp, PASSWORD_DEFAULT);
$mdp2 = htmlentities($_POST['mdp2'], ENT_QUOTES,"utf-8");
$mot_de_passe_confirmation = password_hash($mdp2, PASSWORD_DEFAULT);


$mdplenght = strlen($_POST['mdp']);

if (isset($_POST['CGU']))
{
    if (!empty($email) AND !empty($email_confirmation) AND !empty($mot_de_passe) AND !empty($mot_de_passe_confirmation))
    {
        if($mdplenght >=8)
        {
            if($_POST['mdp'] == $_POST['mdp2'])
            {
                if($email==$email_confirmation)
                {
                    include "../Modele/connexion_inscription_modele.php";
                    //echo getEmail($email);
                    if(getEmail($email))
                    {
                        sendData($email,$mot_de_passe);
                    } else {
                        echo 'Votre email existe déjà dans notre base de données';
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

if($mot_de_passe != $mot_de_passe_confirmation)
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

