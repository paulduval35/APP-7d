<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

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

    <section id="section_faq">
        <div class="box_faq" >
        <h3 class="connexion_inscription">FAQ</h3><br>
        <?php echo getValues() ?>
        </div>
    </section>

    <footer>
        <?php include "footer.php"?>
    </footer>
</div>

</body>
</html>