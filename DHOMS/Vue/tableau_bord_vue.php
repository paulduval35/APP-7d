<?php
include "../Controleur/url.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <script src = "../Vue/jquery-3.2.1.js"></script>

    <script>
        function changeValuePieceVue(value) {
            $.ajax({
                type: 'GET',
                url: '../Controleur/piece_controleur.php',
                data: {valeur: value},
                success: function(response){
                    $('#nav_pieces').html(response);
                }
            })
            $.ajax({
                type: 'GET',
                url: '../Controleur/capteur_controleur.php',
                data:{valeur: null},
                success: function(response){
                    $('#section_capteurs').html(response);
                }
            })
        }


        function changeValueGlobal(value) {
            $.ajax({
                type: 'GET',
                url: '../Controleur/capteur_controleur.php',
                data:{valeur: value},
                success: function(response){
                    $('#section_capteurs').html(response);
                }
            })
        }



        function changeValueCapteursVue(value) {
            $.ajax({
                type: 'GET',
                url: '../Controleur/capteur_controleur.php',
                data:{valeur: value},
                success: function(response){
                    $('#section_capteurs').html(response);
                }
            })
        }
    </script>
    <title>DHOMS</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../Vue/style.css">
	<!-- commentaire -->
</head>

<body>

	
    <nav>
        <?php include "../Vue/nav.php"?>
    </nav>

    <div id = "header_footer">
        <header>
            <?php include "header.php"?>
        </header>

        <section>

                    <div id="box_tableaubord" class = "box_tableaubord" >
                        <h3 id="titre_tableau_de_bord">Tableau de bord</h3>
                            <div>
                                <div id = "maison_tableaubord <?php echo $IDmaison?>" class="box_nom_maison" value = "<?php echo $IDmaison?>">
                                    <span class="nom_maison"> <?php echo getNomMaison($IDmaison);?> </span>
                                </div>
                            </div>
                        <div id = "global_tableaubord">
                            <div>
                                <button class = "button_global" onclick = "changeValueGlobal(1)">
                                    Global
                                </button>
                            </div>
                            <div class="nom_piece_focused">
                                Global
                            </div>
                        </div>
                        <div id = "nav_maison">

                            <div id = "nav_pieces">

                            </div>

                            <div id = "section_capteurs">


                            </div>
                        </div>


                        <div class="flex-outer" id="bouton_ajout_habitation">
                            <li >
                                <a href="ajout_capteur_vue.php" class="ajout_habitation"><button >Ajouter un capteur</button></a>
                            </li>
                        </div>
                        <div class="flex-outer" id="bouton_ajout_habitation">
                            <li >
                                <a href="../Vue/habitation.php" class="ajout_habitation"><button >Ajouter une habitation</button></a>
                            </li>
                        </div>

                        <?php

                        if ($_SESSION['statut']="Admin"):?>

                            <div class = "flex-outer" id = "bouton_ajout_habitation">
                                <li>
                                    <a href=<?php echo $DHOMS_URL?>/Vue/accueil_admin_vue.php><button>Espace administrateur</button></a>
                                </li>
                            </div>

                        <?php endif;?>
                    </div>


<script>changeValuePieceVue(1);
    changeValueGlobal(1);
</script>

        </section>

        <footer>
            <?php include "footer.php"?>
        </footer>
    </div>


</body>
</html>