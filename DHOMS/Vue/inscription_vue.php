<!mettre les cookies et les sessions>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>


        <nav>
            <?php include "nav.php"?>
        </nav>

        <div id="header_footer">
            <header>
                <?php include "header.php"?>
            </header>

            <section>




                <form id ="form_inscription" action="../Controleur/inscription_controleur.php" method="post" id="p_inscription">
                    <h3 id="connexion_inscription"> INSCRIPTION </h3><br>
                    <ul class = "flex-outer">
                        <li>
                            <label for="nom_inscription">
                                Nom
                            </label>

                            <input id = "nom_inscription" type = "text" name = "nom" required placeholder="NOM">
                        </li>

                        <li>
                            <label for="prenom_inscription">
                                Prénom
                            </label>

                            <input id = "prenom_inscription" type = "text" name = "prenom" required placeholder="PRENOM">
                        </li>

                        <li>
                            <label for="mail_inscription">
                                E-mail
                            </label>
                            <input id="mail_inscription" type="email" name="email"  required  placeholder="ENTRER VOTRE EMAIL">
                        </li>

                        <li>
                            <label for="confirmationmail_inscription">
                                Confirmer votre email
                            </label>
                            <input id="confirmationmail_inscription" type="email"  name="emailconfirmation" required placeholder="CONFIRMER VOTRE EMAIL">
                        </li>

                        <li>
                            <label for="mdpm">
                                Mot de passe
                            </label>


                            <input id="mdpm" type="password" name="mdp"  title="Minimum 8 caractères (uniquement des chiffres et des lettres)" required placeholder=
                                "ENTRER VOTRE MOT DE PASSE">
                        </li>

                        <li>
                            <label for="mdp2">
                                Confirmer le mot de passe
                            </label>

                            <input id="mdp2" type="password" name="mdp2"  required placeholder="CONFIRMER VOTRE MOT DE PASSE">
                        </li>

                        <li>
                            <label for="statut_inscription">
                                Statut
                            </label>

                            <select id = "statut_inscription" name = "statut" required>
                                <option>opt1</option>
                                <option>opt2</option>
                            </select>
                        </li>

                        <li>
                            <label for="numfixe_inscription">
                                Numéro de téléphone fixe
                            </label>

                            <input id = "numfixe_inscription" name = "numfixe" required placeholder="ENTRER VOTRE NUMERO DE TELEPHONE FIXE">
                        </li>

                        <li>
                            <label for="nummobile_inscription">
                                Numéro de téléphone mobile
                            </label>

                            <input id = "nummobile_inscription" name = "nummobile" required placeholder="ENTRER VOTRE NUMERO DE TELEPHONE PORTABLE">
                        </li>

                        <li>
                            <label for="etat_inscription">
                                Etat
                            </label>
                            <input id="etat_inscription" name ="etat" required placeholder="ENTRER VOTRE ETAT">
                        </li>

                        <li class="checkboxclass">
                            <input id = "checkbox" type="checkbox" name="CGU" value="CGU">J'ai lu et j'accepte les CGU
                        </li>

                        <li>
                            <button type="submit">S'inscrire</button>
                        </li>


                    </ul>
                </form>



            </section>


            <footer>
                <?php include "footer.php"?>
            </footer>

        </div>


</body>