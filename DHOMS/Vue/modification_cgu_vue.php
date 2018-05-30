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
            <?php echo $row['texte_cgu']?>
        <?php endforeach;?>

        <div>

        <form>
            <div>
                <label for="cgu"><h1>Modification des CGU :</h1></label>
                <input type="text" id="uname" name="name"
                       placeholder= "<?php foreach($texte_cgu as $row):?>
                                        <?php echo $row['texte_cgu']?>
                                    <?php endforeach;?>">
            </div>
            <div>
                <button>Envoyer</button>
            </div>
        </form>
</div>


    </section>

    <footer>
        <?php include "footer.php"?>
    </footer>
</div>
</body>
</html>