<?php session_start();?>
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
                    $('#nav_maison').html(response);
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

</head>

<body>

	
    <nav>
        <?php include "../Vue/nav.php"?>
    </nav>

    <div id = "header_footer">
        <header>
            <?php include "header.php"?>
        </header>

        <section id = "section_tableau_bord">

            <div id = "nav_maison">

                <?php foreach ($arrayMaison as $IDmaison):?>
                    <?php $_SESSION['IDmaison'] = $IDmaison;?>
                    <div class="contenu_nav_maison">
                        <input id = maisonID.<?php echo $IDmaison?> type="hidden" value="<?php echo $IDmaison?>"?>
                        <button class = "button_tableau_bord" value = "<?php echo $IDmaison?>" onclick="changeValuePieceVue(this.value)">
                        <?php echo getNomMaison($IDmaison);?>
                        </button>
                    </div>
                <?php endforeach ?>



            </div>

            <div id = "nav_pieces">



            </div>

            <div id = "section_capteurs">



            </div>

            <!--<div id="box_tableaubord" class = "box_tableaubord" >


                <div class="flex-outer" id="bouton_ajout_habitation">
                    <li >
                        <a href="../Vue/ajout_capteur.php" class="ajout_habitation"><button >Ajouter un capteur</button></a>
                    </li>
                </div>
                <div class="flex-outer" id="bouton_ajout_habitation">
                    <li >
                        <a href="../Vue/habitation.php" class="ajout_habitation"><button >Ajouter une habitation</button></a>
                    </li>
                </div>
            </div>
            -->

        </section>

        <footer>
            <?php include "footer.php"?>
        </footer>
    </div>


</body>
</html>