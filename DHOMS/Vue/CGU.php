<!DOCTYPE html>
<html lang="en">

<head>
    <title>DHOMS</title>
    <meta charset="UTF-8">
    <link rel= "stylesheet" href="style.css" />
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
        <?php
        include "../Modele/connect_database_modele.php";

        function getCGU(){
            global $bdd;
            $reponse = $bdd->query("SELECT texte_cgu FROM cgu WHERE id = (SELECT MAX(id) FROM cgu)");
            return $reponse;
        }

        $cgu= getCGU();
        $texte_cgu = $cgu->fetchall();

        ?>

        <?php foreach($texte_cgu as $row):?>
            <?php echo $row['texte_cgu']?>
        <?php endforeach;?>

    </section>

    <footer>
        <?php include "footer.php"?>
    </footer>
</div>
</body>
</html>