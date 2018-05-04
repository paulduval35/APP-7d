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

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM habitation');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
    ?>
    <p>
        <strong>Habitation</strong> : <?php echo $donnees['nom']; ?><br />
        ID: <?php echo $donnees['ID']; ?>
        Taille : <?php echo $donnees['surface']; ?> metres carres !<br />
    </p>
    <?php
}

$reponse->closeCursor(); // Termine le traitement de la requête



$bdd->exec('INSERT INTO habitation(nom,surface,ID_adresse) VALUES (\'maison1\',20,2)');

echo 'Le contenu a bien ete ajoute';

?>
