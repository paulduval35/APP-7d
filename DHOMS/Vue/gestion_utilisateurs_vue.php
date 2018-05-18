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
        <?php include "header.php"?>
    </header>
			 
	<section>
        <div id="box_tableaubord" class = "box_tableaubord" >
            <h3 id="titre_tableau_de_bord">Liste des utilisateurs</h3>
            <table class="liste_Utilisateurs" id="swag">
                <tr>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Email</td>
                </tr>
            </table>
                <?php foreach($listeUtilisateur as $row):?>
                    <table class="liste_Utilisateurs">
                        <tr>
                            <td><?php echo $row['nom']?></td>
                            <td><?php echo $row['prenom']?></td>
                            <td><?php echo $row['email']?></td>
                        </tr>
                    </table>
                <?php endforeach;?>
				
			<br><br><br>

			<h3 id="titre_tableau_de_bord">Gestion des utilisateurs</h3>
                 <div class="flex-outer" id="bouton_ajout_habitation">
                    <li >
                        <a href="../Vue/ajout_utilisateurs_vue.php" class="ajout_habitation"><button >Ajouter un utilisateurs</button></a>
                    </li>

                    <li >
                        <a href="../Vue/ajout_utilisateurs_vue.php" class="ajout_habitation"><button >Supprimer un utilisateurs</button></a>
                    </li>
                 </div>
        </div>
    </section>

    <footer>
        <?php include "footer.php"?>
    </footer>
</div>

</body>
</html>