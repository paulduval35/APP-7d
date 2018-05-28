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
				<div>
				
				
				<h2>Gestion des utilisateurs</h2>
					<form id ="form_supprimer" action="../Controleur/gestion_utilisateurs_controleur.php" method="post" id="p_supprimer">
					<ul class="flex-other">
					<li>
					<input id="mail_supprimer" type="email" name="email"  required  placeholder="VEUILLEZ ENTREZ L'ADRESSE EMAIL" class="mail_supprimer" align="center">
					</li>
					<br><br>
					<li>
					<button type="submit">Rechercher</button>
				</li>
				</ul>

					</form>
					</div>
			
				</section>

        <footer>
            <?php include "footer.php"?>
        </footer>
    </div>
</body>
</html>