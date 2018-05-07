<!DOCTYPE html>
<html lang="en">

<head>

    <title>DHOMS</title>
    <meta charset="UTF-8">
    <link rel= "stylesheet" href="style.css" />
    <!-- commentaire -->
</head>

<body>


<nav>
    <?php include "nav.php"?>
</nav>

<div id = "header_footer">
    <header>
        <?php include "header.php"?>
    </header>

    <section>

        <form id ="form_habitation" action="/Applications/XAMPP/xamppfiles/htdocs/DHOMS/Controleur/habitation_controleur.php" method="POST" id="p_habitation">
            <h3 id="ajouter_habitation"> AJOUTER UNE HABITATION </h3><br>
            <ul class = "flex-outer">
                <li>
                    <label>
                        Nom de l'habitation
                    </label>

                    <input id = "nom_habitation" type = "text" name = "nom_habitation" required placeholder="NOM HABITATION">
                </li>

                <li>
                    <label>
                        Surface
                    </label>

                    <input id = "surface_habitation" type = "text" name = "surface" required placeholder="SURFACE HABITATION">
                </li>

                <li>
                    <label>
                        Numéro de rue
                    </label>
                    <input id="num_rue" type="number" name="num_rue"  required  placeholder="NUMERO DE RUE">
                </li>

                <li>
                    <label>
                        Nom de la rue
                    </label>
                    <input id="nom_rue" type="text"  name="rue" required placeholder="NOM DE LA RUE">
                </li>

                <li>
                    <label>
                        Code postal
                    </label>


                    <input id="code_postal" type="number" name="code_postal" required placeholder="CODE POSTAL">
                </li>

                <li>
                    <label>
                        Ville
                    </label>

                    <input id="ville" type="text" name="ville" required placeholder="VILLE">
                </li>


                <li>
                    <label>
                        Pays
                    </label>

                    <input id = "pays" name = "pays" type="text" required placeholder="PAYS">
                </li>

                <h4>
                    Si vous êtes en appartement, veuillez renseigner les champs suivants
                </h4>

                <li>
                    <label>
                        Etage
                    </label>

                    <input id = "etage" name = "etage" type="number" required placeholder="ETAGE">
                </li>

                <li>
                    <label>
                        Numéro d'appartement
                    </label>
                    <input id="num_appartement" name ="num_appartement" type="number" required placeholder="NUMERO D'APPARTEMENT">
                </li>

                <li class="checkboxclass">
                    <input id = "checkbox" type="checkbox" name="CGU" value="CGU">J'ai lu et j'accepte les CGU
                </li>

                <li>
                    <button type="submit">Ajouter</button>
                </li>


            </ul>
        </form>

    </section>

    <footer>
        <?php include "footer.php"?>
    </footer>
</div>


</body>
</html>