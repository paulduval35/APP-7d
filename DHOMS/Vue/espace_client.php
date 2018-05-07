<!DOCTYPE html>
<html lang="en">

<head>
    <title>DHOMS</title>
    <meta charset="UTF-8">
    <link rel= "stylesheet" href="style.css" />
    <!-- commentaire -->
</head>

<body>

<?php
try {
    // Connection à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=dhoms;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch(Exception $e) {
    // En cas d'erreur, on affiche un message d'erreur
    die('Erreur : '.$e->getMessage());
}
?>

<nav>
    <?php include "nav.php"?>
</nav>

<div id = "header_footer">
    <header>
        <?php include "header.php"?>
    </header>

    <section>
        <div id="form_contact">
            <h3 id="connexion_inscription"> Tableau de bord</h3>

            <ul class="flex-outer">
                <li >
                    <a href="habitation_vue.php"><button >Ajouter une habitation</button></a>
                </li>
                <li ><label>Maison :</label><br/>
                    <div class ="moyen_texte">
                        <?php
                        // On récupère le contenu de la table CONTROLEUR pour la pièce 1
                        $reponse = $bdd->query('SELECT * FROM controleur WHERE ID_piece = 1');

                        while ($donnees = $reponse->fetch()) {
                            ?>
                            <p><?php echo $donnees['categorie']; ?> : <?php echo $donnees['etat']; ?><br/></p>
                            <?php
                        }
                        // Termine le traitement de la requête
                        $reponse->closeCursor();
                        ?>
                    </div>
                </li>

                <li ><label>Chambre :</label><br/>
                    <div class ="moyen_texte">
                        <?php
                        // On récupère le contenu de la table CONTROLEUR pour la pièce 2
                        $reponse = $bdd->query('SELECT * FROM controleur WHERE ID_piece = 2');

                        while ($donnees = $reponse->fetch()) {
                            ?>
                            <p><?php echo $donnees['categorie']; ?> : <?php echo $donnees['etat']; ?><br/></p>
                            <?php
                        }
                        // Termine le traitement de la requête
                        $reponse->closeCursor();
                        ?>
                    </div>
                </li>

                <li ><label>Salon :</label><br/>
                    <div class ="moyen_texte">
                        <?php
                        // On récupère le contenu de la table CONTROLEUR pour la pièce 3
                        $reponse = $bdd->query('SELECT * FROM controleur WHERE ID_piece = 3');

                        while ($donnees = $reponse->fetch()) {
                            ?>
                            <p><?php echo $donnees['categorie']; ?> : <?php echo $donnees['etat']; ?><br/></p>
                            <?php
                        }
                        // Termine le traitement de la requête
                        $reponse->closeCursor();
                        ?>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <footer>
        <?php include "footer.php"?>
    </footer>
</div>

</body>
</html>