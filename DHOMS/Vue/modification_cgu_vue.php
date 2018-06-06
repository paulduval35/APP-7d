<!DOCTYPE html>
<html lang="en">

<head>
    <title>DHOMS</title>
    <meta charset="UTF-8">
    <link rel= "stylesheet" href="../Vue/style.css" />
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
        <?php foreach($texte_cgu as $row):?>
            <?php $affiche = $row['texte_cgu'];?>
        <?php endforeach;?>

        <form id ="form_habitation" action="../Controleur/cgu_envoie_modif_controleur.php" method="POST" id="p_habitation">
            <h3 id="ajouter_habitation"> MOFIFIER LES CGU : </h3><br>
            <ul class = "flex-outer">
                <li>
                    <?php foreach($texte_cgu as $row):?>
                         <textarea rows='25' lines='100' input type='text' name='texte_cgu' class='modif_cgu_area' > <?php echo"$affiche"?></textarea>
                    <?php endforeach;?>
                </li>

                <li>
                    <button type="submit">Enregistrer les modifications</button>
                </li>
            </ul>
        </form>

    </section>

    <footer>
        <?php include "footer.php"?>
    </footer>
</div>
</body>
</html>