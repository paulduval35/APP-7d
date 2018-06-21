<?php session_start();?>

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


             <form id ="form_habitation" action="http://localhost/DHOMS/Controleur/habitation_controleur.php" method="POST" id="p_habitation">
                 <h3 id="ajouter_habitation"> PROFIL </h3><br>
                 <ul class = "flex-outer">
                     <li>
                         <label>
                             Nom
                         </label>

                         <input id = "nom_habitation" type = "text" name = "nom" required placeholder="NOM">
                     </li>

                     <li>
                         <label>
                             Prénom
                         </label>

                         <input id = "prenom_habitation" type = "text" name = "prenom" required placeholder="PRENOM">
                     </li>

                     <li>
                         <label>
                             Téléphone
                         </label>
                         <input id="num_rue" type="text" name="numero"  required  placeholder="NUMERO DE TELEPHONE">
                     </li>

                     <li>
                         <label>
                             Téléphone fixe
                         </label>
                         <input id="num_rue" type="text" name="numero_fixe"  required  placeholder="NUMERO DE TELEPHONE FIXE">
                     </li>

                     <li>
                         <label>
                             Forfait tarifaire
                         </label>
                        <!-- <input id="nom_rue" type="text"  name="Forfait" required placeholder="">-->
                         <select>

                           <option>  Forfait actuel </option>
                           <option>  Forfait OR </option>
                           <option>  Forfait ARGENT </option>
                           <option>  Forfait BRONZE </option>

                     </li>

                     <li>

                         <button type = "submit" name ="button">Valider</button>
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
