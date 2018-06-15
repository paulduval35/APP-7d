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
		
		<form class ="form_gerer_piece" action="../Controleur/ajouter_piece_controleur.php" method="post">
            <ul class = "flex-outer gerer_piece">

				
				<h1 class="gerer_capteurs" > Ajouter une piece</h1>

				<li>

                    <label for="nom_salle">
                        Nom de la piece
                    </label>
                    <input id="nom_piece" type="text" name="nom"  required  placeholder="ENTREZ LE NOM DE LA PIECE">
                </li>
				<li>
                    <label for="surface">
                        Surface
                    </label>
                    <input id="surface" type="number" name="surface"  required  placeholder="LA SURFACE DE LA PIECE">
                </li>
				<input id="IDmaison" name="IDmaison" type="hidden" value="<?php echo $IDmaison ?> ">

                <button class="bouton" type="submit" name="bouton">Ajouter la piece</button>

            </ul>
        </form>

            <form action="../Controleur/supprimer_piece_controleur.php" method="post" class="form_gerer_piece" >
            <ul class = "flex-outer gerer_piece">
				<h1 class="gerer_capteurs" > Supprimer une piece</h1>

		<?php
		findPiece($IDmaison);
		?>
		<br>
		<button class="bouton" type="submit" name="bouton">Supprimer la piece</button>
            </ul>
		</form>
		
		</section>
        <footer>
            <?php include "footer.php"?>
        </footer>
    </div>


</body>
</html>
		
		