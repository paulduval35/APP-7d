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
        <?php include "nav.php"?>
    </nav>

<div id = "header_footer">
    <header>
        <?php include "header.php"?>
    </header>

    <section>
        <div class = "box_gestion_actionneurs" >
            <h3 id="titre_tableau_de_bord">Listes des actionneurs :</h3>

            <div id = "icone_capteur_tableaubord" >
                    <?php foreach($listeActionneur as $row):?>
                        <div class="maison_tableaubord" id = "maison_tableaubord <?php echo $row['reference']?>">
                            <p><?php echo $row['categorie']?> ( référence : <?php echo $row['reference']?> )</p>
                            <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/<?php echo $row['categorie'];?>.png" alt="icone <?php echo $row['categorie'];?>"></div>
                        </div>
                    <?php endforeach;?>
            </div>

            <div class="flex-outer" id="bouton_ajout_habitation">
                <li >
                    <a href="ajout_capteur_vue.php" class="ajout_habitation"><button >Ajouter un actionneur</button></a>
                </li>
            </div>
            <div class="flex-outer" id="bouton_ajout_habitation">
                <li >
                    <a href="habitation_vue.php" class="ajout_habitation"><button >Supprimer un actionneur</button></a>
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