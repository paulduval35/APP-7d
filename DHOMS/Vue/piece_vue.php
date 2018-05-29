

<?php

/*
/$capteur = getCapteur($row1['ID']);
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
    <div class = "capteur_tableaubord">
    <form id ="form_capteur tab_bord" action="../Controleur/capteur_controleur.php" method="post" >

        <div id ="capteur tab_bord">
            <div class="nom_capteur tab_bord" id="nom_capteur plus"> Ajouter un capteur </div>

            <div id = "icone_capteur_tableaubord" >
                <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/plus.png" alt="icone plus"
                    </div>
            </div>
        </div>
    </form>
    </div>
</div>
</div>
</div>*/
?>


<?php while($affichage = $valeur->fetch()):?>
    <div id = "nav_pieces_interne">
        <button class = "button_pieces" value = "<?php echo $affichage['ID']?>" onclick = "changeValueCapteursVue(this.value)">
            <?php echo $affichage['nom'];?>

        </button>



    </div>


<?php endwhile; ?>





