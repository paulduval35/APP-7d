<?php session_start();?>
<?php include "../Controleur/url.php"?>
<?php if (!isset($_SESSION['statut'][0])){
    $_SESSION['statut'][0]='a';
}?>
<?php if ($_SESSION['statut'][0]=="Admin"):?>
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
            <div class="acceuil_admin"><br/>
            <h3 class="titre_acc"> Accueil administrateur</h3><br/><br/>

            <ul class="flex-outer">
                <li>
                    <button class="bouton_acc_admin"> <a href="<?php echo $DHOMS_URL; ?>/Controleur/gestion_utilisateurs_controleur.php"> <label class="lien_acc">Gestion des utilisateurs</label> </a> </button>
                </li>

                <li >
                    <button class="bouton_acc_admin"> <a href="<?php echo $DHOMS_URL; ?>/Controleur/gestion_actionneurs_controleur.php"> <label class="lien_acc">Gestion des actionneurs</label> </a> </button>
                </li>

                <li >
                    <button class="bouton_acc_admin"> <a href="<?php echo $DHOMS_URL; ?>/Controleur/gestion_panne_controleur.php"> <label class="lien_acc">Gestion des pannes</label> </a> </button>
                </li>

                <li >
                    <button class="bouton_acc_admin"> <a href="<?php echo $DHOMS_URL; ?>/Controleur/cgu_controleur.php"> <label class="lien_acc">Modification des CGU</label> </a> </button>
                </li>

                <li >
                    <button class="bouton_acc_admin"> <a href="<?php echo $DHOMS_URL; ?>/Controleur/modifier_faq_controleur.php"> <label class="lien_acc">Modification de la FAQ</label> </a> </button>
                </li>

                <li >
                    <button class="bouton_acc_admin"> <a href="<?php echo $DHOMS_URL; ?>/Controleur/statistiques_controleur.php"> <label class="lien_acc">Statistiques du site</label> </a> </button>
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
<?php endif;?>
<?php if ($_SESSION['statut'][0] != "Admin"){
    header('Location:'.$DHOMS_URL."/Controleur/tableau_bord_controleur.php");
}
