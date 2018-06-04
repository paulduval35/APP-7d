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
    <?php include "../Controleur/url.php"?>
	
    <nav>
        <?php include "nav.php"?>
    </nav>

    <div id = "header_footer">
        <header>
            <?php include "header.php"?>
        </header>

        <section>
            <div class="acceuil_admin">
            <h3 class="titre_acc"> Accueil administrateur</h3>

            <ul class="flex-outer">
                <li>
                    <button class="bouton_acc_admin"> <a href="<?php echo $DHOMS_URL; ?>/Controleur/gestion_utilisateurs_controleur.php"> <label class="lien_acc">Gestion des utilisateurs</label> </a> </button>
                </li>

                <li >
                    <button class="bouton_acc_admin"> <a href="<?php echo $DHOMS_URL; ?>/Vue/A_MODIFIER.php"> <label class="lien_acc">Gestion des pannes</label> </a> </button>
                </li>

                <li >
                    <button class="bouton_acc_admin"> <a href="<?php echo $DHOMS_URL; ?>/Controleur/gestion_actionneurs_controleur.php"> <label class="lien_acc">Gestion des actionneurs</label> </a> </button>
                </li>

                <li >
                    <button class="bouton_acc_admin"> <a href="<?php echo $DHOMS_URL; ?>/Controleur/cgu_controleur.php"> <label class="lien_acc">Modification des CGU</label> </a> </button>
                </li>

            </ul>

            </div>
        </section>

        <footer>
            <?php include "footer.php"?>
        </footer>
    </div>


</body>
</html>