<?php session_start();?>
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
                    <?php foreach($listeMessage as $row):?>
                        <div id="panne_message">
                            <p><?php echo $row['date']?> Objet : <?php echo $row['objet']?></p>
                            <p>Message : <?php echo $row['message']?></p><br>
                        </div>
                    <?php endforeach;?>
            </div>
        </div>
    </section>

    <footer>
        <?php include "footer.php"?>
    </footer>
</div>

</body>
</html>