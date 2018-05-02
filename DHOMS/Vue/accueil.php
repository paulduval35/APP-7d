<!DOCTYPE html>
<html lang="en">

<head>
    <title>DHOMS</title>
    <meta charset="UTF-8">
    <link rel= "stylesheet" href="style.css" />
	<!-- commentaire -->
</head>

<body>
    <?php require "nav.php";?>
    <div id="main_accueil">
        <div class="box_gauche_main_accueil"></div>
        <div class="connexion">
            <h3> Connexion </h3>

            <form action="connexion.php" method="post">
                <p><input type="text" value="Adresse mail"></p> <!-- ajouter système pour filtrer les characteres non supportés par e-mail -->
                <p><input password="password" value="Mot de passe"></p> <!-- mettre un système -->
                <p>tu es :</p>
                <p><input type="radio" name="areyou" value="user"> utilisateur</p>
                <p><input type="radio" name="areyou" value="admin"> administrateur</p>
                <p><input type="submit" value="Connexion"></p>
            </form>
        </div>

    <div class="inscription">
            <h3> Inscription </h3>
            <form action="inscription.php" method="post">
                <p><input type="text" value="Adresse mail"></p>
                <p><input password="password" name=password value="Mot de passe"></p>
                <p><input password="password" name= confpassword value="Confirmation mot de passe"></p>
                <p><input type="text" value="Code client"></p>
                <p><input type="radio" name="CGU" value="CGU"> J'ai lu et j'accepte les CGU</p>
                <p><input type="submit" value="S'inscrire"></p>
            </form>
    </div>
    </div>


</body>
</html>