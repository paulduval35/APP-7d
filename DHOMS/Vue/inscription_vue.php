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
                <h3 id="connexion_inscription"> INSCRIPTION </h3><br>



                <form id ="form_inscription" action="../Controleur/inscription_controleur.php" method="post" id="p_inscription">

                    <ul class = "flex-outer">
                        <li>
                            <label>
                                Nom
                            </label>

                            <input id = "nom_inscription" type = "text" name = "nom" required>
                        </li>

                        <li>
                            <label>
                                Prénom
                            </label>

                            <input id = "prenom_inscription" type = "text" name = "prenom" required>
                        </li>

                        <li>
                            <label>
                                E-mail
                            </label>
                            <input id="mail_inscription" type="email" name="email"  required title="E-mail: user@domain.com"/>
                        </li>

                        <li>
                            <label>
                                Mot de passe
                            </label>


                            <input id="mdpm" type="password" name="mdp"  title="Minimum 8 caractères (uniquement des chiffres et des lettres);" required/>
                        </li>

                        <li>
                            <label>
                                Confirmer le mot de passe
                            </label>

                            <input id="mdp2" type="password" name="mdp2"  required>
                        </li>

                        <li>
                            <label>
                                Statut
                            </label>

                            <select id = "statut_inscription" name = "statut" required>
                                <option>opt1</option>
                                <option>opt2</option>
                            </select>
                        </li>

                        <li>
                            <label>
                                Numéro de téléphone fixe
                            </label>

                            <input id = "numfixe_inscription" name = "numfixe" required>
                        </li>

                        <li>
                            <label>
                                Numéro de téléphone mobile
                            </label>

                            <input id = "nummobile_inscription" name = "nummobile" required>
                        </li>

                        <li>
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