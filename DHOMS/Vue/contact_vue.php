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
        <form id="form_contact" action="../Controleur/contact_controleur.php" method="post">
        <h3> Nous contacter</h3>

            <ul class="flex-outer">
                <li><label>Appelez nous</label>
                    <div class ="gros_texte">0123456789</div>
                </li>

                <li ><label><br>ou envoyez nous un message<br></label></li>

                <li >
                    <input name="objet" type="text" textarea rows = "1" class="message_contact" placeholder="OBJECT"></inputtextarea>
                </li>

                <li >
                    <textarea rows = "8" input name="message" class="message_contact" placeholder="VOTRE MESSAGE"></textarea>
                </li>

                <li>
                    <button type="submit">Envoyer</button>
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