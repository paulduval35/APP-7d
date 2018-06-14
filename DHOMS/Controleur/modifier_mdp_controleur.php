<?php

if(!empty($_POST['reste_connecte']))
{
    session_start();
}

include "../Modele/connexion_inscription_modele.php";

//Initialisation des variables

$email="";

$email = $_POST['email'];

$mdp = $_POST['mdp'];
$mdp2 = $_POST['mdp2'];

$nb_email="";
$nb_email = check_pseudo($email);
//echo $nb_email;

$mdplenght = strlen($_POST['mdp']);

    if (!empty($email) AND !empty($mdp) AND !empty($mdp2))
    {
        if($mdplenght >=8)
        {
            if($_POST['mdp'] == $_POST['mdp2'])
            {
                        include "../Vue/connexion_inscription_vue.php";
                        echo 'Votre email existe déjà dans notre base de données !!!';

                    } else {
                        $mot_de_passe = password_hash($mdp, PASSWORD_BCRYPT);
                        changeData($email,$mot_de_passe);
                        include "tableau_bord_controleur.php";
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

