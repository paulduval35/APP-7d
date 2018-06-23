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
            <?php
                include "../Modele/supprimer_utilisateurs_modele.php";
                $util=getListeUtilisateur();
                $listeUtilisateur = $util->fetchall();
            ?>
            <h3 id="titre_tableau_de_bord">Liste des utilisateurs</h3>
            <table>
                <tr class="bord">
                    <td class="bord">Nom</td>
                    <td class="bord">Prénom</td>
                    <td class="bord">Email</td>
                </tr>
            <?php foreach($listeUtilisateur as $row):?>
                    <tr class="bord">
                        <td class="bord"><?php echo $row['nom']?></td>
                        <td class="bord"><?php echo $row['prenom']?></td>
                        <td class="bord"><?php echo $row['email']?></td>
                    </tr>
            <?php endforeach;?>
            </table>
        </div>

            <div>
                <h3 id="titre_tableau_de_bord">Supprimer un utilisateurs</h3>
                <form id ="form_supprimer" action="../Controleur/gestion_utilisateurs_controleur.php" method="post" id="p_supprimer">
                    <ul class = "flex-outer gerer_piece">
                        <label for="nom_salle">
                            Adresse mail de l'utilisateur à supprimer :
                        </label>
					    <li>
					        <input id="mail_supprimer" type="email" name="email"  required  placeholder="EMAIL" class="mail_supprimer" align="center">
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