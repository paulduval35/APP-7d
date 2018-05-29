<?php while($affichageCapteurs = $capteurs->fetch()):?>

    <div class = "capteur_vue">
        <div class="capteur_tab_bord">
    <?php if($affichageCapteurs['categorie']=="Température"){?>
        <?php $affichageDonnees = getValuesCapteur($affichageCapteurs['ID']) ->fetch() ?>
            <div class="nom_capteur tab_bord" id="nom_capteur "> <?php echo $affichageCapteurs['categorie'];?> </div>

            <div id = "icone_capteur_tableaubord" class = "icone_capteur_tableaubord_<?php echo $affichageCapteurs['ID']?>" >
                <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/<?php echo $affichageCapteurs['categorie']?>.png" alt="icone <?php echo $alt_lum;?>"  >
                    <div class="selecteur-content ON_OFF">

                            <div class="temperature_actuelle"><?php echo $affichageDonnees['donnee']?></div>
                            <div class="slidecontainer">
                                <input type="range" min="5" max="35" value="<?php echo $affichageDonnees['donnee']?>" class="slider_temperature" id="slider_<?php echo $affichageCapteurs['ID']?>">
                            </div>
                            <span id="humidité"><span id="val_slider_<?php echo $affichageCapteurs['ID']?>"><?php echo $affichageDonnees['donnee']?></span>°C</span>
                        <?php    }    ?>

    <?php if($affichageCapteurs['categorie']=="Lumière"){?>
        <?php $affichageDonnees = getValuesCapteur($affichageCapteurs['ID']) ->fetch() ?>
            <div class="nom_capteur tab_bord" id="nom_capteur "> <?php echo $affichageCapteurs['categorie'];?> </div>

            <div id = "icone_capteur_tableaubord" class = "icone_capteur_tableaubord_<?php echo $affichageCapteurs['ID']?>" >
                <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/<?php if($affichageCapteurs['categorie']=="Lumière") {
        if($affichageCapteurs['etat']=='allumé'){
            $alt_lum = 'Lumière allumée';echo 'Lumière_allumée';
        }
        else {$alt_lum = 'Lumière éteinte';echo 'Lumière_éteinte';
        }
    }
    else {
        echo $affichageCapteurs['categorie'];
    }
    ?>.png" alt="icone <?php echo $alt_lum;?>"  >
            <div class="selecteur-content ON_OFF">
                <label class="switch ON_OFF">
                    <input type="checkbox" name="true_or_false" class="selection_ON_OFF" <?php if($affichageCapteurs['etat']=="allumé"){echo 'checked';} ?>>
                        <span class="curseur rond ON_OFF"></span>
                        </label>
                        <?php    }    ?>

    <?php if($affichageCapteurs['categorie']=="Humidité"){?>
            <?php $affichageDonnees = getValuesCapteur($affichageCapteurs['ID']) ->fetch() ?>
            <div class="nom_capteur tab_bord" id="nom_capteur "> <?php echo $affichageCapteurs['categorie'];?> </div>
            <div id = "icone_capteur_tableaubord" class = "icone_capteur_tableaubord_<?php echo $affichageCapteurs['ID']?>" >
            <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/<?php echo $affichageCapteurs['categorie']?>.png" alt="icone <?php echo $alt_lum;?>"  >
            <div class="selecteur-content ON_OFF">
            <span id="humidité"><?php echo $affichageDonnees['donnee']?>%</span>
                        <?php    }    ?>

    <?php if($affichageCapteurs['categorie']=="Présence"){?>
        <?php $affichageDonnees = getValuesCapteur($affichageCapteurs['ID']) ->fetch() ?>
        <div class="nom_capteur tab_bord" id="nom_capteur "> <?php echo $affichageCapteurs['categorie'];?> </div>
        <div id = "icone_capteur_tableaubord" class = "icone_capteur_tableaubord_<?php echo $affichageCapteurs['ID']?>" >
        <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/<?php echo $affichageCapteurs['categorie']?>.png" alt="icone <?php echo $alt_lum;?>"  >
        <div class="selecteur-content ON_OFF">
        <label class="switch ON_OFF">
            <input type="checkbox" class="selection_ON_OFF">
                <span class="curseur rond ON_OFF"></span>
                                </label>
                        <?php    }    ?>

                        <?php if($affichageCapteurs['categorie']=="Store"){?>
    <?php $affichageDonnees = getValuesCapteur($affichageCapteurs['ID']) ->fetch() ?>
        <div class="nom_capteur tab_bord" id="nom_capteur "> <?php echo $affichageCapteurs['categorie'];?> </div>
        <div id = "icone_capteur_tableaubord" class = "icone_capteur_tableaubord_<?php echo $affichageCapteurs['ID']?>" >
        <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/<?php echo $affichageCapteurs['categorie']?>.png" alt="icone <?php echo $alt_lum;?>"  >
        <div class="selecteur-content ON_OFF">
        <div class="slidecontainer">
        <input type="range" min="0" max="100" value="<?php echo $affichageDonnees['donnee']?>" class="slider_store" id="slider_<?php echo $affichageCapteurs['ID']?>"></div>
        <span id="humidité">Ouvert à <span id="val_slider_<?php echo $affichageCapteurs['ID']?>"><?php echo $affichageDonnees['donnee']?>%</span>
                            <?php    }    ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endwhile;?>