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

    <section>
        <h3>FAQ</h3>

        <p>
            <div class="faq">
                <?php echo getValues() ?>
            </div>
        </p>


    </section>

    <footer>
        <?php include "footer.php"?>
    </footer>
</div>


</body>
</html>