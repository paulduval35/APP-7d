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
                <input type="range" min="5" max="35" value="18" class="slider_temperature" id="slider_<?php echo $capteur['ID']?>" onfocus="slider(<?php echo $capteur['ID']?>)">
            <button class="bouton_capteur"><span id="val_<?php echo $capteur['ID']?>"></span> °C</button></div></div>
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
                                                                    <input type="range" min="0" max="100" value="100" class="slider_temperature" id="slider_<?php echo $capteur['ID']?>" onfocus="slider(<?php echo $capteur['ID']?>)">
                                                                    <button type="submit" class="bouton_capteur"><span id="val_<?php echo $capteur['ID']?>"></span> %</button></div>
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

    function slider(ID) {

        var slider_temperature = document.getElementById("slider_"+ID);
        var output_temperature = document.getElementById("val_"+ID);
        output_temperature.innerHTML = slider_temperature.value; // Affiche la valeur par défaut

// Update la valeur du slider à chaque fois qu'on le bouge
        slider_temperature.oninput = function () {
            output_temperature.innerHTML = this.value;
        }
    }



</script>

