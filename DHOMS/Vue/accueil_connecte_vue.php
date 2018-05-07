<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>DHOMS</title>
    <meta charset="UTF-8">
    <link rel= "stylesheet" href="style.css" />
    <link rel="stylesheet" href="../Vue/style.css"/>
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
            <?php if($header == 3){
                echo "oui";
            }
            else{
                echo "non";
            }
            ?>
        </section>

        <footer>
            <?php include "footer.php"?>
        </footer>
    </div>


</body>
</html>