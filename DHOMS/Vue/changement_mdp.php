<!mettre les cookies et les sessions>
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
        <form id ="form_mdp_oublie" action="../Controleur/modifier_mdp_controleur.php" method="post" id="p_connexion">
            <h3 class="connexion_inscription"> CHANGEZ VOTRE MOT DE PASSE </h3><br>
            <ul class = "flex-outer">

                <li>
                    <label for="mail_connexion">
                        E-mail
                    </label>
                    <input id="mail_connexion" type="email" name="email"  required  placeholder="ENTREZ VOTRE EMAIL">
                </li>

                <li>
                    <label for="mdp">
                        Mot de passe
                    </label>


                    <input id="mdp" type="password" name="mdp"  title="Minimum 8 caractères (uniquement des chiffres et des lettres)" required placeholder=
                    "ENTREZ VOTRE MOT DE PASSE">
                </li>

                <li>
                    <label for="mdp">
                        Confirmez votre mot de passe
                    </label>
                    <input id="mdpconfirm" type="password" name="mdpconfirm" required placeholder="ENTREZ VOTRE MOT DE PASSE">

                <li class="checkboxclass">
                    <input id = "rester_connecter" type="checkbox" name="rester_connecte" value="RC">Rester connecter
                </li>

                <li>
                    <button type="submit" name="bouton">Se Connecter</button>
                </li>
            </ul>
    </section>


    <footer>
        <?php include "footer.php"?>
    </footer>

</div>
</body>