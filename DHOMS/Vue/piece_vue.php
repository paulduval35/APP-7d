<?php

$capteur = getCapteur($row1['ID']);
$listeCapteur = $capteur->fetchAll();

?>




<div class = "nom-piece">
    <?php echo $row1['nom'];?>
</div>

<div class = "box-capteur-tableaubord">
<?php foreach($listeCapteur as $row2):?>
    <div class = "capteur-tableaubord">
        <?php include "capteur_vue.php";?>
    </div>
<?php endforeach;?>

</div>