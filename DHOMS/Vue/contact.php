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
        <h3 id="connexion_inscription"> Nous contacter</h3>

            <ul class="flex-outer">
                <li><label>Appelez nous</label>
                    <div class ="gros_texte">0123456789</div>
                </li>

                <li ><label><br>ou<br></label></li>

                <li>
                    <label for="message_contact">Envoyez nous un message</label>

                    <textarea rows = "5" id="message_contact" placeholder="VOTRE MESSAGE"></textarea>


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