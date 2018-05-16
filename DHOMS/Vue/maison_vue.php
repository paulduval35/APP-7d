<?php

$piece = getPieces($row['ID']);
$listePiece = $piece->fetchAll();

$capteur_global = getCapteur(1);
$listeCapteur_global = $capteur_global->fetchAll();

?>
<script src="../Vue/javascript.js" type="text/javascript"></script>

<div id="box_nom_maison <?php echo $row['ID']?>" class="box_nom_maison">

        <label class="switch tab_bord_maison">
            <input type="checkbox" class="selection_maison" onclick="afficher('a_cacher <?php echo $row['ID']?>'); modifier_nom_maison('nom_maison <?php echo $row['ID']?>');modifier_box_nom_maison('box_nom_maison <?php echo $row['ID']?>'); modifier_maison_tableaubord('maison_tableaubord <?php echo $row['ID']?>');">
            <span id="nom_maison" class="nom_maison"><?php echo $row['nom'] ;?></span>
        </label>

</div>

<div id="a_cacher <?php echo $row['ID']?>" class="a_cacher">

<div class = "box_piece_tableaubord">
    <div class = "piece_tableaubord">
    <div id="box_nom_piece Récapitulatif Global" class="box_nom_piece">
            <span id="nom_piece" class="nom_piece">Récapitulatif Global</span>
        </label>

    </div>
        <div class = "box_capteur_tableaubord">
            <?php foreach($listeCapteur_global as $row2):?>
                <div class = "capteur_tableaubord">
                    <?php include "capteur_vue.php";?>
                </div>
            <?php endforeach;?>

        </div>
    </div>
</div>



<div class = "box_piece_tableaubord">
<?php foreach($listePiece as $row1):?>
    <div class = "piece_tableaubord">
            <?php include "piece_vue.php";?>
    </div>

<?php endforeach;?>
</div>
</div>



