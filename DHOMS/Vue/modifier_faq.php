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
       <form method="post" action="../Controleur/modifier_faq_controleur.php">
           <h3>FAQ</h3>
           <ul class="flex-outer">
               <li ><label><br>Entrez votre Question et la réponse correspondante<br></label></li>

               <li >
                   <input name="nvtitre" type="text" class="nvtitre_faq" placeholder="Question"></inputtextarea>
               </li>

               <li >
                   <textarea rows = "8" cols="100" input name="nvreponse" class="message_contact" placeholder="Reponse"></textarea>
               </li>

               <li>
                   <button type="submit">Envoyer</button>
               </li>
           </ul>
       </form>

        <form method="post" action="../Controleur/supprimer_faq_controleur.php">
            <p>
                <!-- une balise select ou input ne peut pas être imbriquée directement dans form -->
                <select name="menu_destination">
                    <?php
                    $reponse = getTitre();
                    while ($donnees = $reponse->fetch())
    {
        ?>
                    <option name="abc" value="<?php echo $donnees["titre"] ?>"><?php echo $donnees["titre"] ?></option>
    <?php
    }
    ?>
                <input type="submit" value="Supprimer" title="valider pour aller à la page sélectionnée" />

            </p>
        </form>


    </section>

    <footer>
        <?php include "footer.php"?>
    </footer>
</div>


</body>
</html>