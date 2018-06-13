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

				<li>
                    <label for="nom_salle">
                        Nom de la salle
                    </label>
                    <input id="nom_piece" type="text" name="nom"  required  placeholder="ENTREZ LE NOM DE LA SALLE">
                </li>
				<li>
                    <label for="surface">
                        Surface
                    </label>
                    <input id="surface" type="number" name="surface"  required  placeholder="LA SURFACE DE LA SALLE">
                </li>
				<input id="IDmaison" name="IDmaison" type="hidden" value="<?php echo "$IDmaison"?> ">

				<li>
                    <button type="submit" name="bouton">Ajouter la salle</button>
                </li>
				
			</form>
		 </section>
        <footer>
            <?php include "footer.php"?>
        </footer>
    </div>


</body>
</html>
		
		
		
		
		
		