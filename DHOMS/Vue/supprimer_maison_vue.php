<?php session_start();
include "../Controleur/url.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>DHOMS</title>
    <meta charset="UTF-8">
    <link rel= "stylesheet" href="../Vue/style.css" />
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
        <form action="../Controleur/supprimer_maison_controleur.php" method="post" id="supp_capt" class ="form_supprimer_capteurs">
            <ul class = "flex-outer supprimer_capteurs">
                <h3 class="connexion_inscription supprimer_capteurs" >Sélectionnez la maison à supprimer:</h3>

                <?php

                include "../Modele/supprimer_maison_modele.php";

                $query = supprimerMaison($_SESSION['ID']);
                $results = $query->fetchAll(PDO::FETCH_ASSOC);

                if ($query->rowCount() > 0) { ?>
                    <select name="pieceselect" class="select_piece" >
                        <?php foreach ($results as $row) { ?>
                            <option value="<?php echo $row['ID']; ?>"><?php echo $row['nom'];?></option>

                        <?php } ?>
                    </select>
                <?php } ?>
                <br>
                <input type="hidden" name="ID_piece" value="<?php echo $ID_personne;?>" >
                <button class="bouton" type="submit" name="boutonsupp">Supprimer cette maison</button>

            </ul>
        </form>

    </section>

    <footer>
        <?php include "footer.php"?>
    </footer>
</div>

</body>
</html>