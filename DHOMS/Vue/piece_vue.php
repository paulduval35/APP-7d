<?php
while($piece = $idpiece->fetch()):?>
    <div id = "nav_pieces">
        <input type="hidden" id="pieceID.<?php echo $piece['ID']?>" value="<?php echo $piece['ID']?>">
        <button class = "button_tableau_bord" value = "<?php echo $piece['ID']?>" onclick = "changeValueCapteursVue(this.value)">
            <?php echo $piece['nom'];?>
        </button>
    </div>


<?php endwhile; ?>





