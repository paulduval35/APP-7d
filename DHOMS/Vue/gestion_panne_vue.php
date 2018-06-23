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
        <div>
            <h3 id="titre_tableau_de_bord">Message des utilisateurs :</h3>
            <div id = "box_panne_message" >
                <table>
                    <tr class="bord">
                        <td class="bord">Date</td>
                        <td class="bord">Nom</td>
                        <td class="bord">Prénom</td>
                        <td class="bord">Objet</td>
                        <td class="bord">Message</td>
                        <td class="bord">Réponse</td>
                    </tr>

                    <?php foreach($listeMessage as $row):?>
                        <div id="panne_message">
                            <tr class="bord">
                                <td class="bord"><?php echo $row['date']?></td>
                                <td class="bord">SKYWALKER</td>
                                <td class="bord">ANAKIN</td>
                                <td class="bord"><?php echo $row['objet']?></td>
                                <td class="bord"><?php echo $row['message']?></td>
                                <td class="bord"><?php echo $row['reponse']?></td>
                            </tr>
                        </div>
                    <?php endforeach;?>
                </table><br/>
                <button class="bouton_acc_admin"> <a href="<?php echo $DHOMS_URL; ?>/Controleur/gestion_panne_reponse_controleur.php"> <label class="lien_acc">Répondre</label> </a> </button>
            </div>
        </div>
    </section>

    <footer>
        <?php include "footer.php"?>
    </footer>
</div>

</body>
</html>