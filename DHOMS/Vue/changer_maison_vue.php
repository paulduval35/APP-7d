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

        <form action="../Controleur/tableau_bord_controleur.php" method="post" id="supp_capt" class ="form_supprimer_capteurs">
            <ul class = "flex-outer supprimer_capteurs">
                <h3 class="connexion_inscription supprimer_capteurs" >Sélectionnez la maison que vous souhaitez :</h3>

                <?php

                include "../Modele/tableau_bord_modele.php";

                $query= getMaisons($_SESSION['ID']);
                $results = $query->fetchAll(PDO::FETCH_ASSOC);
                if ($query->rowCount() > 0) { ?>
                    <select name="ID_maison" class="select_piece" >
                        <?php foreach ($results as $row) { ?>
                            <option  value="<?php echo $row['ID']; ?>"><?php echo $row['nom'];?></option>
                        <?php } ?>
                    </select>
                <?php } ?>
                <br>
                <button class="bouton" type="submit" name="boutonsupp" >Choisir</button>

            </ul>
        </form>


    </section>

    <footer>
        <?php include "footer.php"?>
    </footer>
</div>

</body>
</html>