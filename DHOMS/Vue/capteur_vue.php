<?php while($capteur = $capteurs->fetch()):?>
    <div class = "capteur_vue">
        <?php echo $capteur['type'];?>
        <?php
        $valeur = getValuesCapteur($capteur['ID']);
        ?>
        <input type="hidden" class = "valeur" value="<?php echo $capteur["ID"]?>">




        <div id="<?php echo $capteur["ID"]?>">

        </div>
    </div>


<?php endwhile;?>


<script>

    var idcapteur = document.getElementsByClassName('valeur');

    var timeOut = setInterval(fullrefresh, 300);

    function fullrefresh(){
        for (var i = 0; i<idcapteur.length ; i++){
            refresh(idcapteur[i].value);
        }

    }




    function refresh(value) {
        $.ajax({
            type: 'POST',
            url: '../Controleur/capteurrefresh_controleur.php',
            data: {valeur: value},
            success: function (response){
                $("#"+value).html(response)
            }
        })
    }



</script>

