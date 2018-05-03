<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>DHOMS</title>
    <meta charset="UTF-8">
    <link rel= "stylesheet" href="style.css" />
	<!-- commentaire -->
</head>

<body>

	
    <div id="main_accueil">
        <div class="connexion">
            <h3 id="connexion_inscription"> Connexion </h3>

            <form action="connexion.php" method="post" id="p_connexion">
                <p>  <input id="mail" type="email" name="email" placeholder=" E-mail" required title="E-mail du type : user@domain.com"/> </p>
				<p> <input type="password" class=MotDePasse  name="password" required placeholder="Mot de passe"> </p>
                <p><input type="submit" value="Connexion"></p>
            </form>
        </div>

    <div class="inscription">
            <h3 id="connexion_inscription"> Inscription </h3>
            <form action="inscription.php" method="post" id="p_inscription">
			<p><input id="mailins" type="email" name="email" placeholder=" E-mail" required title="E-mail: user@domain.com"/></p>
			<p>	<input id="mdpm" type="password" name="mdp" placeholder="Mot de passe" title="Minimum 8 caractères (uniquement des chiffres et des lettres);" required/></p>
			<p><input id="mdp2" type="password" name="mdp2" placeholder="Confirmer le mot de passe" required></p>
            <p><input type="checkbox" name="CGU" value="CGU"> J'ai lu et j'accepte les CGU</p>
            <p><input type="submit" value="S'inscrire"></p>
            </form>
    </div>
    </div>


</body>
</html>