<?php include "../Controleur/url.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Vue/style.css">
</head>

<body>






<nav>
    <?php include "nav.php"?>
</nav>

<div id="header_footer">
    <header>
        <?php include "header.php"?>
    </header>

    <section id = "box_connexion_inscription">
        <form id ="form_connexion" action="../Controleur/connexion_controleur.php" method="post" id="p_connexion">
            <h3 class="connexion_inscription"> CONNEXION </h3><br>
            <ul class = "flex-outer">

                            <input id="mdp" type="password" name="mdp"  title="Minimum 8 caractères (uniquement des chiffres et des lettres)" required placeholder=
                            "ENTREZ VOTRE MOT DE PASSE">
                        </li>

                        <li class="checkboxclass">
                            <a href="../Vue/changement_mdp.php"><input type="button" name="mdpoublie"/>Mot de passe oublié</a>
                        </li>
                        <li class="checkboxclass">
                            <input id = "rester_connecter" type="checkbox" name="rester_connecte" value="RC">Rester connecter
                        </li>

                        <li>
                            <button type="submit" name="bouton">Se Connecter</button>
                        </li>
                <li>
                    <label for="mail_connexion">
                        E-mail
                    </label>
                    <input id="mail_connexion" type="email" name="email"  required  placeholder="ENTREZ VOTRE EMAIL">
                </li>

                <li>
                    <label for="mdpm">
                        Mot de passe
                    </label>

                    <input id="mdpm" type="password" name="mdp"  title="Minimum 8 caractères (uniquement des chiffres et des lettres)" required placeholder=
                    "ENTREZ VOTRE MOT DE PASSE">
                </li>

                <li>
                    <button type="submit">Se Connecter</button>
                </li>
            </ul>
        </form>

        <div></div>

        <form id ="form_inscription" action="../Controleur/inscription_controleur.php" method="post" id="p_inscription">
            <h3 class="connexion_inscription"> INSCRIPTION </h3><br>
            <ul class = "flex-outer">

                <li>
                    <label for="mail_inscription">
                        E-mail
                    </label>
                    <input id="mail_inscription" type="email" name="email"  required  placeholder="ENTREZ VOTRE EMAIL">
                </li>

                <li>
                    <label for="confirmationmail_inscription">
                        Confirmez votre email
                    </label>
                    <input id="confirmationmail_inscription" type="email"  name="emailconfirmation" required placeholder="CONFIRMEZ VOTRE EMAIL">
                </li>

                <li>
                    <label for="mdpm">
                        Mot de passe
                    </label>


                    <input id="mdpm" type="password" name="mdp"  title="Minimum 8 caractères (uniquement des chiffres et des lettres)" required placeholder=
                    "ENTREZ VOTRE MOT DE PASSE">
                </li>

                <li>
                    <label for="mdp2">
                        Confirmez le mot de passe
                    </label>

                    <input id="mdp2" type="password" name="mdp2"  required placeholder="CONFIRMEZ VOTRE MOT DE PASSE">
                </li>

                <li class="checkboxclass">
                    <input id = "checkbox" type="checkbox" name="CGU" value="CGU"><a href="CGU.php">J'ai lu et j'accepte les CGU<a/>
                </li>

                <li>

                    <button type="submit">S'inscrire</button>
                </li>
            </ul>
        </form>

        <div><button class="bouton_acc_admin"> <a href="<?php echo $DHOMS_URL; ?>/Vue/accueil_admin_vue.php"> <label class="lien_acc">Plateforme Administrateur</label> </a> </button></div>

    </section>

    <footer>
        <?php include "footer.php"?>
    </footer>
</div>

</body>