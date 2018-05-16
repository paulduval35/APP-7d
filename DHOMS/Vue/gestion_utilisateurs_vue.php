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
				
				            <div id="box_tableaubord" class = "box_tableaubord" >
                <h3 id="titre_tableau_de_bord">Liste utilisateurs :</h3>
                <?php foreach($listeUtilisateur as $row):?>
                  <!--  <div class="maison_tableaubord" id = "maison_tableaubord <?php echo $row['nom']?>">
                        

                    --></div>
					<?php print_r $row['email']?>
					
                <?php endforeach;?>
				
				
				<h3>Gestion des utilisateurs</h3>
					<form id ="form_inscription" action="../Controleur/gestion_des_utilisateurs_controleur.php" method="post" id="p_inscription">
					<ul class="flex-outer">
					<li>
					<input id="mail_connexion" type="email" name="email"  required  placeholder="VEUILLEZ ENTREZ L'ADRESSE EMAIL">
					</li>
					<br><br>
					<li>
					<button type="submit">Rechercher</button>
				</li>
				</ul>

					</form>
			
				</section>

        <footer>
            <?php include "footer.php"?>
        </footer>
    </div>


</body>
</html>
