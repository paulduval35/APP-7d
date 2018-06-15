<?php

while($piece = $idpiece->fetch()):
    if ($piece['nom'] != "Global"){?>

<div id = "nav_pieces_interne">
    <input type="hidden" id="pieceID.<?php echo $piece['ID']?>" value="<?php echo $piece['ID']?>">
    <button class = "button_pieces" value = "<?php echo $piece['ID']?>" onclick = "changeValueCapteursVue(this.value,'<?php echo $piece['nom']?>')">
        <?php echo $piece['nom'];?>
    </button>
</div>
<?php } endwhile; ?>

<div id = "nav_pieces_interne">
    <form id="form_capteur" class="slidecontainer" method="post" action="../Controleur/gerer_piece_controleur.php">
        <input type="hidden" name="IDmaison" value="<?php echo $IDmaison ?>">
        <button class="button_pieces" type="submit">Gérer les pièces</button>
    </form>
</div>



