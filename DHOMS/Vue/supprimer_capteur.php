<?php session_start();
include "../Controleur/url.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>DHOMS</title>
    <meta charset="UTF-8">
    <link rel= "stylesheet" href="../Vue/style.css" />
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
        <form class ="form_supprimer_capteurs" method="post">
            <ul class = "flex-outer supprimer_capteurs">
        <h3 class="connexion_inscription supprimer_capteurs" >Selectionner le capteur à supprimer:</h3>

<?php

include "../Modele/gerer_capteur_modele.php";

$rangee_capteur=supprimerCapteur($id_piece);

?>

            </ul>
        </form>
	
</section>

    <footer>
        <?php include "footer.php"?>
    </footer>
</div>

</body>
</html>