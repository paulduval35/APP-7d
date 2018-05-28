<?php include "../Controleur/url.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>DHOMS</title>
    <meta charset="UTF-8">
    <link rel= "stylesheet" href="../Vue/style.css" />
    <script src="../Vue/javascript.js" type="text/javascript"></script>
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
        <form id ="form_habitation" action="http://localhost/DHOMS/Controleur/habitation_controleur.php" method="POST" id="p_habitation">
            <h3 id="ajouter_habitation"> AJOUTER UN UTILISATEURS </h3><br>
            <ul class = "flex-outer">
                <li>
                    <label>
                        Nom
                    </label>

                    <input id = "nom" type = "text" name = "nom" required placeholder="NOM">
                </li>

                <li>
                    <label>
                        Prenom
                    </label>

                    <input id = "prenom" type = "text" name = "prenom" required placeholder="PRENOM">
                </li>

                <li>
                    <label>
                        Email
                    </label>
                    <input id="email" type="text" name="email"  required  placeholder="EMAIL">
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