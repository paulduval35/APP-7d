<?php session_start();
include "../Controleur/url.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>DHOMS</title>
    <meta charset="UTF-8">
    <link rel= "stylesheet" href="style.css" />
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
		<?php
		echo "<h1> Selectionner le capteur à supprimer:  </h1>";


include "../Modele/ajout_capteur_modele.php";
$id_piece = 2;
$rangee_capteur=findCapteur($id_piece);	



?>


	
</section>

    <footer>
        <?php include "footer.php"?>
    </footer>
</div>

</body>
</html>