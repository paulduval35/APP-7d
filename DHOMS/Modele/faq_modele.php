<?php
/**
 * Created by PhpStorm.
 * User: paulduval
 * Date: 28/05/2018
 * Time: 11:37
 */

function getValues()
{
    include "connect_database_modele.php";
    global $bdd;
    $req = $bdd->query("SELECT titre, reponse FROM faq");
    while ($donnees = $req->fetch())
    {
        print $donnees['titre']; ?><br>
        <?php print $donnees['reponse']; ?><br><?php
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