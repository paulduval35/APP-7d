<?php

$piece = getPieces($row['ID']);
$listePiece = $piece->fetchAll();

?>

<div class = "nom-maison">
<?php echo $row['nom'] ;?>
    <?php echo ":";?>
</div>

<div class = "box-piece-tableaubord">
<?php foreach($listePiece as $row1):?>
    <div class = "piece-tableaubord">
            <?php include "piece_vue.php";?>
    </div>

<?php endforeach;?>
</div>

