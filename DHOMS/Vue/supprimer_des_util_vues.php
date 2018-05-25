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
<nav>
    <?php include "nav.php"?>
</nav>

<div id = "header_footer">
    <header>
        <?php include "header.php" ?>

    </header>
			 <section>
		<?php
		
		if ($utilisateur != ''){
			echo 'Nous avons trouvé une personne : <br>'  ;
			
			echo $utilisateur['prenom'] . " " . $utilisateur['nom'];
			//$IDuser=$utilisateur['ID'];
			//$_POST['IDuser'];
			?>
			<form method="POST" action=''>
			<input type="hidden" name="email"  value="<?php echo htmlspecialchars($email); ?>">
			<input type="submit" name="buttondel"  value="Supprimer">
			</form> 
			<?php
			}
		else{
			echo '<script language="javascript">';
		echo 'alert( "Utilisateur non trouvé")';
		
echo '</script>';
echo '<script>window.location.href = "../Vue/supprimer_utilisateurs_recherche_vue.php";</script>';
		exit();}
		?>
		</section>
<footer>
        <?php include "footer.php"?>
    </footer>
</div>

</body>
</html>