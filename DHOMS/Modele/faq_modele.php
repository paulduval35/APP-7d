<?php

function getValues()
{
    include "connect_database_modele.php";
    global $bdd;
    $req = $bdd->query("SELECT titre, reponse FROM faq");
    while ($donnees = $req->fetch())
    {?><h3 class="titre_faq"><?php
        echo $donnees['titre'];
        ?></h3>
<p class="texte_faq">
<?php
        echo $donnees['reponse'];
        echo "<br>";
?>
        </p>
        <?php
    };
}

function modifierTitre($nvtitre)
{
    include "connect_database_modele.php";
    global $bdd;
    $req = $bdd->query("UPDATE faq SET titre = :nvtitre");
    $req->execute(array(
        'nvtitre' => $nvtitre,
    ));
}

function ajouterFAQ($nvtitre,$nvreponse)
{
    include "connect_database_modele.php";
    global $bdd;
    $req = $bdd->prepare('INSERT INTO faq(titre,reponse) VALUES(:titre,:reponse)');
    $req->execute(array(
            'titre'=>$nvtitre,
            'reponse'=>$nvreponse,
    ));
}

function getTitre()
{
    include "connect_database_modele.php";
    global $bdd;
    $reponse = $bdd->query('SELECT titre FROM faq');
    return $reponse;
}

function deleteFAQ($retourTitre)
{
    include "connect_database_modele.php";
    global $bdd;
    //$reponse = $bdd->prepare("DELETE titre, reponse FROM faq WHERE titre = '$retourTitre';");
    $reponse = $bdd->query("DELETE FROM faq WHERE titre = '$retourTitre'");
}

?>