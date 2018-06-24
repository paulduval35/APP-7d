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
            document.getElementById('nom_piece_focused').innerHTML="CouCou";
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
            document.getElementById('nom_piece_focused').innerHTML="Global";
        }

        function changeValueCapteursVue(value,nom) {
            $.ajax({
                type: 'GET',
                url: '../Controleur/capteur_controleur.php',
                data:{valeur: value},
                success: function(response){
                    $('#section_capteurs').html(response);
                }
            })
            document.getElementById('nom_piece_focused').innerHTML= nom;
        }
    </script>
    <title>DHOMS</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Vue/style.css">
	<!-- commentaire -->
</head>

<body>
    <nav>
        <?php   include "../Vue/nav.php"?>
    </nav>

    <div id = "header_footer">
        <header>
            <?php include "header.php"?>
        </header>

        <section>
                    <div id="box_tableaubord" class = "box_tableaubord" >
                            <div class="gestion_maisons">
                                <div >
                                    <div class="selecteur">
                                        <button class="gérer_maison">Gérer ses Maisons</button>
                                    <div class="selecteur-content selecteur_maison">
                                        <form id="form_capteur" class="slidecontainer" method="post" action="../Controleur/habitation_page_controleur.php">
                                            <input type="hidden" name="ID_personne" value="<?php echo "Ok" ?>">
                                            <button class="bouton_capteur" id="bouton_plus" type="submit">Ajouter</button>
                                        </form>
                                        <form id="form_capteur" class="slidecontainer" method="post" action="../Controleur/supprimer_maison_page_controleur.php">
                                            <input type="hidden" name="ID_personne" value="<?php echo "Ok" ?>">
                                            <button class="bouton_capteur" id="bouton_plus" type="submit">Supprimer</button>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                <div id = "maison_tableaubord <?php echo $IDmaison?>" class="box_nom_maison" value = "<?php echo $IDmaison?>">
                                    <span class="nom_maison"> <?php echo getNomMaison($IDmaison);?> </span>
                                </div>
                                <div >
                                    <form id="form_capteur" class="slidecontainer" method="post" action="../Controleur/changer_maison_controleur.php">
                                        <input type="hidden" name="ID_personne" value="<?php echo $_SESSION['ID'] ?>">
                                        <button class="gérer_maison" type="submit">Changer de maison</button>
                                    </form>
                                </div>
                            </div>
                        <div id = "global_tableaubord">
                            <div>
                                <button class = "button_global" onclick = "changeValueGlobal(<?php echo $idglobal['ID']?>)">
                                    <?php echo $idglobal['nom']?>
                                </button>
                            </div>
                            <div id="nom_piece_focused">
                            </div>
                        </div>
                        <div id = "nav_maison">

                            <div id = "nav_pieces">

                            </div>

                            <div id="sk-circle" class="sk-circle">
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

                            <div id = "section_capteurs">
                            </div>
                        </div>

                        <?php
                        if ($_SESSION['statut'][0]=="Admin"):?>

                            <div class="flex-outer" id="bouton_acc_admin">
                                <li>
                                    <a href=<?php echo $DHOMS_URL?>/Vue/accueil_admin_vue.php><button>Espace administrateur</button></a>
                                </li>
                            </div>
                        <?php endif;?>
                    </div>
        </section>

        <footer>
            <?php include "footer.php"?>
        </footer>
    </div>
    <?php include "../Vue/loader_vue.php";?>
</body>

<script>
    changeValuePieceVue(<?php echo $IDmaison ?>);
    changeValueGlobal(<?php echo $idglobal['ID']?>)
</script>

</html>