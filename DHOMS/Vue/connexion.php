<!mettre les cookies et les sessions>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>


        <nav>
            <?php include "nav.php"?>
        </nav>

        <div id="header_footer">
            <header>
                <?php include "header.php"?>
            </header>
			
			<section>

				<form id ="form_connexion" action="../Controleur/connexion_controleur.php" method="post" id="p_connexion">
				<h3 id="connexion_inscription"> Connexion </h3><br>
				<ul class = "flex-outer">
				<li>
                       <label for="identifiant">
                            Identifiant
                            </label>

                            <input id = "identifiant_connexion" type = "text" name = "prenom" required placeholder="identifiant">
                </li>			
				<li>
			 
							<label for="mdpm">
                                Mot de passe
                            </label>


                            <input id="mdpm" type="password" name="mdp"  title="Minimum 8 caractères (uniquement des chiffres et des lettres)" required placeholder=
                                "ENTRER VOTRE MOT DE PASSE">
				</li>
				
				<li class="checkboxclass">
                            <input id = "rester_connecter" type="checkbox" name="Rester_connecter" value="RC">Rester connecter
                        </li>				
				</form>
				
								
			 </section>
        </div>

			 
			 
			 <footer>
                <?php include "footer.php"?>
            </footer>
			</body>