<?php include "../Controleur/url.php"?>




<a href="<?php echo $DHOMS_URL; ?>/Vue/connexion_inscription_vue.php"><img src="<?php echo $DHOMS_URL;?>/Vue/image/accueil/accueil.png" alt="accueil"></a>
<a href="<?php echo $DHOMS_URL; ?>/Vue/nos_produits.php"><img src="<?php echo $DHOMS_URL;?>/Vue/image/accueil/nosproduits.png" alt="nosproduits"> </a>
<a href="<?php echo $DHOMS_URL; ?>/Controleur/tableau_bord_controleur.php"><img src="<?php echo $DHOMS_URL;?>/Vue/image/accueil/espaceclient.png" alt="espaceclient"> </a>
<a href="<?php echo $DHOMS_URL; ?>/Controleur/faq_controleur.php"><img src="<?php echo $DHOMS_URL;?>/Vue/image/accueil/faq.png" alt="faq"> </a>
<a href="<?php echo $DHOMS_URL; ?>/Vue/contact_vue.php"><img src="<?php echo $DHOMS_URL;?>/Vue/image/accueil/contact.png" alt="contact"> </a>
<?php
if (isset($_SESSION['ID'])){
    echo "<a href = $DHOMS_URL/Controleur/logout.php> Se déconnecter </a>";
}
