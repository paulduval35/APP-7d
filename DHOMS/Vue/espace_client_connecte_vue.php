<?php session_start();
include "../Controleur/url.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>DHOMS</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../Vue/style.css">
	<!-- commentaire -->
</head>

<body>

	
    <nav>
        <?php include $DOMS_RACINE."/Vue/nav.php"?>
    </nav>

    <div id = "header_footer">
        <header>
            <?php include "header.php"?>
        </header>

        <section>
            <div id="box_tableaubord" class = "box_tableaubord" >
                <h3 id="titre_tableau_de_bord">Tableau de bord</h3>
                <?php foreach($listeMaison as $row):?>
                    <div class="maison_tableaubord" id = "maison_tableaubord <?php echo $row['ID']?>">
                        <?php include "maison_vue.php";?>

                    </div>
                <?php endforeach;?>
                <div class="flex-outer" id="bouton_ajout_habitation">
                    <li>
                        <a href="../Vue/habitation.php"><button >Ajouter une habitation</button></a>
                    </li>
                </div>
            </div>

        </section>

        <footer>
            <?php include "footer.php"?>
        </footer>
    </div>


</body>
</html>