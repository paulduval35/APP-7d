<?php
?>

    <form id ="form_capteur tab_bord" action="../Controleur/capteur_controlleur.php" method="post" >

        <div id ="capteur tab_bord">
            <div class="nom_capteur tab_bord" id="nom_capteur <?php echo $row2['ID']?>"> <?php echo $row2['categorie'];?> </div>

        <div id = "icone_capteur_tableaubord" >
            <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/<?php echo $row2['categorie'];?>.png" alt="icone <?php echo $row2['categorie'];?>"  >
                <div class="selecteur-content ON_OFF">

                    <?php if($row2['categorie']=="Température"){?>
                        <div class="slidecontainer">
                            <input type="range" min="5" max="35" value="18" class="slider_temperature" id="slider_temperature">
                        </div>
                        <span id="humidité"><span id="val_slider_temperature"></span>°C</span>
                    <?php    }    ?>

                    <?php if($row2['categorie']=="Lumière"){?>
                    <label class="switch ON_OFF">
                        <input type="checkbox" class="selection_ON_OFF">
                        <span class="curseur rond ON_OFF"></span>
                    </label>
                    <?php    }    ?>

                    <?php if($row2['categorie']=="Humidité"){?>
                        <span id="humidité">47%</span>
                    <?php    }    ?>

                    <?php if($row2['categorie']=="Présence"){?>
                        <label class="switch ON_OFF">
                        <input type="checkbox" class="selection_ON_OFF">
                        <span class="curseur rond ON_OFF"></span>
                    </label>
                    <?php    }    ?>

                    <?php if($row2['categorie']=="Store"){?>
                        <div class="slidecontainer">
                            <input type="range" min="0" max="100" value="100" class="slider_store" id="slider_store">
                        </div>
                        <span id="humidité">Ouvert à <span id="val_slider_store"></span>%</span>
                    <?php    }    ?>

                </div>
            </div>
        </div>
        </div>
    </form>
<?php
?>