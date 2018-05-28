<?php while($affichage2 = $capteurs->fetch()):?>

    <div class = "capteur_vue">
        <?php echo $affichage2['type'];?>
    </div>

<?php endwhile;?>