<?php

$capteur = getCapteur($row1['ID']);
$listeCapteur = $capteur->fetchAll();

?>

<div id="box_nom_piece <?php echo $row1['ID']?>" class="box_nom_piece">

    <label class="switch tab_bord_piece">
        <input type="checkbox" class="selection_piece" onclick="afficher('a_cacher_piece <?php echo $row1['ID']?>')">
        <span id="nom_piece" class="nom_piece"><?php echo $row1['nom'] ;?></span>
    </label>

</div>

<div id="a_cacher_piece <?php echo $row1['ID']?>" class="a_cacher">
<div class = "box_capteur_tableaubord">
<?php foreach($listeCapteur as $row2):?>
    <div class = "capteur_tableaubord">
        <?php include "capteur_vue.php";?>
    </div>
<?php endforeach;?>

</div>
</div>