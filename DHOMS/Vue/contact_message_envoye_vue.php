<?php session_start();
include "../Controleur/url.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src = "../Vue/jquery-3.2.1.js"></script>
    <title>DHOMS</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Vue/style.css">
    <!-- commentaire -->
</head>

<body>
    <nav>
        <?php include "../Vue/nav.php"?>
    </nav>

<div id = "header_footer">
    <header>
        <?php include "header.php"?>
    </header>

    <section>
        <h2> Votre message à bien été envoyé à nos administrateurs</h2>
        <a href="">Retourner à la page d'accueil</a>
    </section>

    <footer>
        <?php include "footer.php"?>
    </footer>
</div>

</body>
</html>