<?php

$capteur = getCapteur($row1['ID']);
$listeCapteur = $capteur->fetchAll();

?>




<div>
    <?php echo $row1['nom'];?>
    <?php foreach($listeCapteur as $row2):?>
    <div>
        <?php include "capteur_vue.php";?>
    </div>
    <?php endforeach;?>
</div>
