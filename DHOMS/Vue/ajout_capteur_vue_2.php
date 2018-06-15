<!DOCTYPE html>
<html lang="fr">
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

<div id="header_footer">
    <header>
        <?php include "header.php"?>
    </header>
    <section id="ajout_numero_serie">

                <form id ="form_serie" action="../Controleur/ajout_capteur_controleur.php" method="post" >
                    <h2 id="titre_serie"> Indiquer le numéro de série :</h2>
                    <input type="hidden" name="ID_piece" value="<?php echo $piece?>">
                    <input type="hidden" name="capteur" value="<?php echo $capteur?>">

                    <div id ="texte_serie">
                        <div class="nom_capteur"><?php echo getCategorieCapteur($capteur)?></div>
                        <div class="nom_capteur">Numéro de Série : </div>
                    </div>

                    <div id = "icone_serie" >
                        <div class="selecteur"><img class="icone_serie" src="../Vue/image/capteurs/<?php echo getCategorieCapteur($capteur)?>.png" alt="icone <?php echo getCategorieCapteur($capteur)?>"  >
                        </div>
                        <div>
                            <input id="input_serie"  type="text" name="serie" placeholder="Entrez le numéro de série"><br>
                            <button class="bouton" type="submit">Ajouter le capteur</button>

                        <div id="sk-circle" class="sk-circle loader-serie">
                            <div class="sk-circle1 sk-child"></div>
                            <div class="sk-circle2 sk-child"></div>
                            <div class="sk-circle3 sk-child"></div>
                            <div class="sk-circle4 sk-child"></div>
                            <div class="sk-circle5 sk-child"></div>
                            <div class="sk-circle6 sk-child"></div>
                            <div class="sk-circle7 sk-child"></div>
                            <div class="sk-circle8 sk-child"></div>
                            <div class="sk-circle9 sk-child"></div>
                            <div class="sk-circle10 sk-child"></div>
                            <div class="sk-circle11 sk-child"></div>
                            <div class="sk-circle12 sk-child"></div>
                        </div>
                        </div>
                    </div>
                    <div id ="texte_serie">
                            <div class="nom_capteur"><?php echo $capteur?></div>
                    </div>
                </form>

    </section>
    <footer>
        <?php include "footer.php"?>
    </footer>
</div>

<script>
    <?php include "../Vue/loader_vue.php";?>
</script>
</body>


</html>