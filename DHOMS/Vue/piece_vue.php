
<?php
while($piece = $idpiece->fetch()):?>
<div id = "nav_pieces_interne">
    <input type="hidden" id="pieceID.<?php echo $piece['ID']?>" value="<?php echo $piece['ID']?>">
    <button class = "button_pieces" value = "<?php echo $piece['ID']?>" onclick = "changeValueCapteursVue(this.value)">
        <?php echo $piece['nom'];?>
    </button>
</div>
<?php endwhile; ?>



