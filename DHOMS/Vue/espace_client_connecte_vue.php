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
            <div id = "box-tableaubord">
                <?php foreach($listeMaison as $row):?>
                    <div class = "maison-tableaubord">
                        <?php include "maison_vue.php";?>

                    </div>
                <?php endforeach;?>
            </div>
        </section>

        <footer>
            <?php include "footer.php"?>
        </footer>
    </div>


</body>
</html>