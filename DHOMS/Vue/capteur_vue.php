<?php while($capteur = $capteurs->fetch()):?>


    <div class = "capteur_vue">
        <input type="hidden" class = "valeur" value="<?php echo $capteur['ID']?>">
        <?php if($capteur['categorie']=="Température"){?>
<div class="nom_capteur tab_bord" id="nom_capteur "> <?php echo $capteur['categorie'];?> </div>

<div id = "icone_capteur_tableaubord" class = "icone_capteur_tableaubord_<?php echo $capteur['ID']?>" >
    <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/<?php echo $capteur['categorie']?>.png" alt="icone Température"  >
        <div class="valeur_capteur_actuelle" id="<?php echo $capteur['ID']?>"></div>
        <div class="selecteur-content selecteur_a_remonter">
            <form id="form_capteur" class="slidecontainer" method="post" action="../Controleur/envoi_donnee_capteur_controleur.php">
                <input type="hidden" name="ID_capteur" value="<?php echo $capteur['ID']?>">
                <input type="range" min="5" max="35" value="18" name = "valeur_prog" class="slider_temperature" id="slider_<?php echo $capteur['ID']?>" onfocus="slider(<?php echo $capteur['ID']?>)">
            <button class="bouton_capteur"><span id="val_<?php echo $capteur['ID']?>">18</span> °C</button></form></div>
    </div>
</div>
            <?php    }    ?>

            <?php if($capteur['categorie']=="Lumière"){?>
            <div class="nom_capteur tab_bord" id="nom_capteur "> <?php echo $capteur['categorie'];?> </div>

            <div id = "icone_capteur_tableaubord" class = "icone_capteur_tableaubord_<?php echo $capteur['ID']?>" >
                <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/<?php if($capteur['categorie']=="Lumière") {
                        if(getValuesCapteur($capteur['ID'])=="1"){
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
                        <form id="form_lum" class="slidecontainer" method="post" action="../Controleur/envoi_donnee_capteur_controleur.php">
                            <label class="switch ON_OFF">
                            <input type="hidden" name="ID_capteur" value="<?php echo $capteur['ID']?>">
                            <input id="input_lum" type="checkbox" <?php if(getValuesCapteur($capteur['ID'])=="1"){echo 'checked';}?> name="valeur_prog" class="selection_ON_OFF">
                            <span class="curseur rond ON_OFF"></span>
                            </label>
                        </form>
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
                                            <div class="valeur_capteur_actuelle" > <?php if (getValuesCapteur($capteur['ID'])=="1") {
                                                    echo "ON";
                                                }
                                                else {
                                                    echo "OFF";
                                                }
                                                ?> </div>
                                            <div class="selecteur-content selecteur_a_remonter">
                                                <form id="form_pres" class="slidecontainer" method="post" action="../Controleur/envoi_donnee_capteur_controleur.php">
                                                    <label class="switch ON_OFF">
                                                        <input type="hidden" name="ID_capteur" value="<?php echo $capteur['ID']?>">
                                                        <input id="input_pres" type="checkbox" <?php if(getValuesCapteur($capteur['ID'])=="1"){echo 'checked';}?> name="valeur_prog" class="selection_ON_OFF">
                                                        <span class="curseur rond ON_OFF"></span>
                                                    </label>
                                                </form>
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
                                                                <form id="form_capteur" class="slidecontainer" method="post" action="../Controleur/envoi_donnee_capteur_controleur.php">
                                                                    <input type="hidden" name="ID_capteur" value="<?php echo $capteur['ID']?>">
                                                                    <input type="range" min="0" max="100" value="100" name = "valeur_prog" class="slider_temperature" id="slider_<?php echo $capteur['ID']?>" onfocus="slider(<?php echo $capteur['ID']?>)">
                                                                    <button class="bouton_capteur"><span id="val_<?php echo $capteur['ID']?>">100</span> %</button>
                                                                </form>
                                                            </div>
                                                    </div>
                                                    </div>

                                                                <?php    }    ?>


    </div>

<?php endwhile;?>

    <div class = "capteur_vue">
        <div class="nom_capteur tab_bord" id="nom_capteur "> Modifier capteurs </div>

        <div id = "icone_capteur_tableaubord" >
            <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/plus.png" alt="icone plus"  >
                <div class="selecteur-content">
                    <form id="form_capteur" class="slidecontainer" method="post" action="../Controleur/ajout_capteur_page_controleur.php">
                        <input type="hidden" name="ID_piece" value="<?php echo $idpiece?>">
                        <button class="bouton_capteur" id="bouton_plus" type="submit">Ajouter</button>
                    </form>
                    <form id="form_capteur" class="slidecontainer" method="post" action="../Controleur/supprimer_capteur_page_controleur.php">
                        <input type="hidden" name="ID_piece" value="<?php echo $idpiece?>">
                        <button class="bouton_capteur" id="bouton_plus" type="submit">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


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


    $(document).ready(function(){

        $('#input_lum').on('click', function() {
            $('#form_lum').submit();
        });
        $('#input_pres').on('click', function() {
            $('#form_pres').submit();
        });

    });


</script>

