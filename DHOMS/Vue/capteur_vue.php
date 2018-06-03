<?php while($capteur = $capteurs->fetch()):?>



    <div class = "capteur_vue">
        <input type="hidden" class = "valeur" value="<?php echo $capteur['ID']?>">
        <?php if($capteur['categorie']=="Température"){?>
<div class="nom_capteur tab_bord" id="nom_capteur "> <?php echo $capteur['categorie'];?> </div>

<div id = "icone_capteur_tableaubord" class = "icone_capteur_tableaubord_<?php echo $capteur['ID']?>" >
    <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/<?php echo $capteur['categorie']?>.png" alt="icone Température"  >
        <div class="valeur_capteur_actuelle" id="<?php echo $capteur['ID']?>"></div>
        <div class="selecteur-content selecteur_a_remonter">
            <div class="slidecontainer">
                <input type="range" min="5" max="35" value="18" class="slider_temperature" id="slider_<?php echo $capteur['ID']?>">
            </div><span id="humidité"><span id="<?php echo $capteur['ID']?>"></span></div>
    </div>
</div>
            <?php    }    ?>

            <?php if($capteur['categorie']=="Lumière"){?>
            <div class="nom_capteur tab_bord" id="nom_capteur "> <?php echo $capteur['categorie'];?> </div>

            <div id = "icone_capteur_tableaubord" class = "icone_capteur_tableaubord_<?php echo $capteur['ID']?>" >
                <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/<?php if($capteur['categorie']=="Lumière") {
                        if($capteur['etat']=='allumé'){
                            $alt_lum = 'Lumière allumée';echo 'Lumière_allumée';
                        }
                        else {$alt_lum = 'Lumière éteinte';echo 'Lumière_éteinte';
                        }
                    }
                    else {
                        echo $capteur['categorie'];
                    }
                    ?>.png" alt="icone <?php echo $alt_lum;?>"  >
                    <div class="selecteur-content ON_OFF">
                        <label class="switch ON_OFF">
                            <input type="checkbox" name="true_or_false" class="selection_ON_OFF" <?php if($capteur['etat']=="allumé"){echo 'checked';} ?>>
                            <span class="curseur rond ON_OFF"></span>
                        </label>
                    </div>
                </div>
            </div>
                        <?php    }    ?>

                        <?php if($capteur['categorie']=="Humidité"){?>
                        <div class="nom_capteur tab_bord" id="nom_capteur "> <?php echo $capteur['categorie'];?> </div>
                        <div id = "icone_capteur_tableaubord" class = "icone_capteur_tableaubord_<?php echo $capteur['ID']?>" >
                            <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/<?php echo $capteur['categorie']?>.png" alt="icone <?php echo $alt_lum;?>"  >
                                <div class="valeur_capteur_actuelle" id="<?php echo $capteur['ID']?>"></div>
                            </div>
                        </div>
                                    <?php    }    ?>

                                    <?php if($capteur['categorie']=="Présence"){?>
                                    <div class="nom_capteur tab_bord" id="nom_capteur "> <?php echo $capteur['categorie'];?> </div>
                                    <div id = "icone_capteur_tableaubord" class = "icone_capteur_tableaubord_<?php echo $capteur['ID']?>" >
                                        <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/<?php echo $capteur['categorie']?>.png" alt="icone <?php echo $alt_lum;?>"  >
                                            <div class="selecteur-content ON_OFF">
                                                <label class="switch ON_OFF">
                                                    <input type="checkbox" class="selection_ON_OFF">
                                                    <span class="curseur rond ON_OFF"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                                <?php    }    ?>

                                                <?php if($capteur['categorie']=="Store"){?>
                                                <div class="nom_capteur tab_bord" id="nom_capteur "> <?php echo $capteur['categorie'];?> </div>
                                                    <div id = "icone_capteur_tableaubord" class = "icone_capteur_tableaubord_<?php echo $capteur['ID']?>" >
                                                        <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/<?php echo $capteur['categorie']?>.png" alt="icone Température"  >
                                                            <div class="valeur_capteur_actuelle" id="<?php echo $capteur['ID']?>"></div>
                                                            <div class="selecteur-content selecteur_a_remonter">
                                                                <div class="slidecontainer">
                                                                    <input type="range" min="5" max="35" value="18" class="slider_temperature" id="slider_<?php echo $capteur['ID']?>">
                                                                </div><span id="humidité"><span id="<?php echo $capteur['ID']?>"></span></div>
                                                        </div>
                                                    </div>

                                                                <?php    }    ?>

                                                        </div>



<?php endwhile;?>

<script>

    var idcapteur = document.getElementsByClassName('valeur');

    var timeOut = setInterval(fullrefresh, 2000);

    function fullrefresh(){
        for (var i = 0; i<idcapteur.length ; i++){
            refresh(idcapteur[i].value);
        }

    }




    function refresh(value) {
        $.ajax({
            type: 'POST',
            url: '../Controleur/capteurrefresh_controleur.php',
            data: {valeur: value},
            success: function (response){
                $("#"+value).html(response)
            }
        })
    }



</script>

<?php while($capteur = $capteurs->fetch()):?>


        <div class="capteur_tab_bord">
            
    <?php if($capteur['categorie']=="Température"){?>
            <div class="nom_capteur tab_bord" id="nom_capteur "> <?php echo $capteur['categorie'];?> </div>

            <div id = "icone_capteur_tableaubord" class = "icone_capteur_tableaubord_<?php echo $capteur['ID']?>" >
                <div class="selecteur température"><img class="icone_capteur" src="../Vue/image/capteurs/<?php echo $capteur['categorie']?>.png" alt="icone <?php echo $alt_lum;?>"  >
    <div class="temperature_actuelle"><?php echo $affichageDonnees['donnee']?></div>
    <div class="selecteur-content ON_OFF">


                            <div class="slidecontainer">
                                <input type="range" min="5" max="35" value="<?php echo $affichageDonnees['donnee']?>" class="slider_temperature" id="slider_<?php echo $capteur['ID']?>">
                            </div>
                            <span id="humidité"><span id="val_slider_<?php echo $capteur['ID']?>"><?php echo $affichageDonnees['donnee']?></span>°C</span>
                        <?php    }    ?>

    <?php if($capteur['categorie']=="Lumière"){?>
            <div class="nom_capteur tab_bord" id="nom_capteur "> <?php echo $capteur['categorie'];?> </div>

            <div id = "icone_capteur_tableaubord" class = "icone_capteur_tableaubord_<?php echo $capteur['ID']?>" >
                <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/<?php if($capteur['categorie']=="Lumière") {
        if($capteur['etat']=='allumé'){
            $alt_lum = 'Lumière allumée';echo 'Lumière_allumée';
        }
        else {$alt_lum = 'Lumière éteinte';echo 'Lumière_éteinte';
        }
    }
    else {
        echo $capteur['categorie'];
    }
    ?>.png" alt="icone <?php echo $alt_lum;?>"  >
            <div class="selecteur-content ON_OFF">
                <label class="switch ON_OFF">
                    <input type="checkbox" name="true_or_false" class="selection_ON_OFF" <?php if($capteur['etat']=="allumé"){echo 'checked';} ?>>
                        <span class="curseur rond ON_OFF"></span>
                        </label>
                        <?php    }    ?>

    <?php if($capteur['categorie']=="Humidité"){?>
            <div class="nom_capteur tab_bord" id="nom_capteur "> <?php echo $capteur['categorie'];?> </div>
            <div id = "icone_capteur_tableaubord" class = "icone_capteur_tableaubord_<?php echo $capteur['ID']?>" >
            <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/<?php echo $capteur['categorie']?>.png" alt="icone <?php echo $alt_lum;?>"  >
            <div class="selecteur-content ON_OFF">
            <span id="humidité"><?php echo $affichageDonnees['donnee']?>%</span>
                        <?php    }    ?>

    <?php if($capteur['categorie']=="Présence"){?>
        <div class="nom_capteur tab_bord" id="nom_capteur "> <?php echo $capteur['categorie'];?> </div>
        <div id = "icone_capteur_tableaubord" class = "icone_capteur_tableaubord_<?php echo $capteur['ID']?>" >
        <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/<?php echo $capteur['categorie']?>.png" alt="icone <?php echo $alt_lum;?>"  >
        <div class="selecteur-content ON_OFF">
        <label class="switch ON_OFF">
            <input type="checkbox" class="selection_ON_OFF">
                <span class="curseur rond ON_OFF"></span>
                                </label>
                        <?php    }    ?>

                        <?php if($capteur['categorie']=="Store"){?>
        <div class="nom_capteur tab_bord" id="nom_capteur "> <?php echo $capteur['categorie'];?> </div>
        <div id = "icone_capteur_tableaubord" class = "icone_capteur_tableaubord_<?php echo $capteur['ID']?>" >
        <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/<?php echo $capteur['categorie']?>.png" alt="icone <?php echo $alt_lum;?>"  >
        <div class="selecteur-content ON_OFF">
        <div class="slidecontainer">
        <input type="range" min="0" max="100" value="<?php echo $affichageDonnees['donnee']?>" class="slider_store" id="slider_<?php echo $capteur['ID']?>"></div>
        <span id="humidité">Ouvert à <span id="val_slider_<?php echo $capteur['ID']?>"><?php echo $affichageDonnees['donnee']?>%</span>
                            <?php    }    ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

            <?php endwhile;?>


            <script>

                var idcapteur = document.getElementsByClassName('valeur');

                var timeOut = setInterval(fullrefresh, 300);

                function fullrefresh(){
                    for (var i = 0; i<idcapteur.length ; i++){
                        refresh(idcapteur[i].value);
                    }

                }




                function refresh(value) {
                    $.ajax({
                        type: 'POST',
                        url: '../Controleur/capteurrefresh_controleur.php',
                        data: {valeur: value},
                        success: function (response){
                            $("#"+value).html(response)
                        }
                    })
                }



            </script>