<!DOCTYPE html>
<html lang="en">

<head>
    <title>DHOMS</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Vue/style.css">
    <!-- commentaire -->
</head>

<body>
<nav>
    <?php include "nav.php"?>
</nav>

<div id = "header_footer">
    <header>
        <?php include "header.php"?>
    </header>

    <section>
        <form id="panne_envoie_reponse" action="../Controleur/gestion_panne_envoie_reponse_controleur.php" method="post">

                <label>A quel message souhaitez vous répondre :<br></label><br/>
                <select name="menu_destination">
                    <?php foreach($listeObjet as $row):?>
                        <option name="abc" value="<?php echo $row['objet']?>"><?php echo $row['objet']?></option>
                    <?php endforeach;?>
                </select><br/><br/>
                <textarea rows = "3" input name="reponse" class="reponse_panne" placeholder="VOTRE REPONSE"></textarea><br/><br/>
                <button type="submit">Répondre</button>

        </form>
    </section>

    <footer>
        <?php include "footer.php"?>
    </footer>
</div>

</body>
</html>