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
<?//$IDmaison = $_POST["IDmaison"];?>
		<section>
		
		<form id ="ajouter_salle" action="../Controleur/ajouter_piece_controleur.php" method="post">
            <ul class = "flex-outer">

				
				<h1> Ajouter une piece</h1>

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
				<input id="IDmaison" name="IDmaison" type="hidden" value="<?php echo "$IDmaison"?> ">

				<li>
                    <button type="submit" name="bouton">Ajouter la piece</button>
                </li>
				</form>
				
				<h1> Supprimer une piece</h1>
				<br>

				
		<form action="../Controleur/supprimer_piece_controleur.php" method="post" id="supp_capt">
		<?php
		findPiece(2);
		?>
		<br>
		<button type="submit" name="bouton">Supprimer la piece</button>
		</form>
		
		</section>
        <footer>
            <?php include "footer.php"?>
        </footer>
    </div>


</body>
</html>
		
		