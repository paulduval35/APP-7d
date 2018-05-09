<?php

$piece = getPieces($row['ID']);
$listePiece = $piece->fetchAll();

?>
<div>
    <?php echo $row['nom'];?>
    <?php foreach($listePiece as $row1):?>

    <div>
            <?php include "piece_vue.php";?>
    </div>

    <?php endforeach;?>

</div>
