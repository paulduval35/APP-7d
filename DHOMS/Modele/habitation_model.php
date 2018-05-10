<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=dhoms;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère le contenu de la table habitation


//------------------------------------------------------------------------------------------------------------------------------------------------

function getMaisons($ID_personne_connecte){
    global $bdd;
    $reponse = $bdd->query("SELECT DISTINCT * 
FROM habitation JOIN appartenance_maison ON habitation.ID = appartenance_maison.ID_habitation 
WHERE appartenance_maison.ID_personne = '$ID_personne_connecte'");

    while ($donnees = $reponse->fetch()) {
        ?>
        <p><?php echo $donnees['ID']; ?><br/></p>
    <?php }
}

getMaisons(2);


<<<<<<< HEAD
echo $donnees['nom'];
=======
>>>>>>> 44d8a0f42b2d7e2988667b0b2b5e833910e6f1b7


//------------------------------------------------------------------------------------------------------------------------------------------------



?>