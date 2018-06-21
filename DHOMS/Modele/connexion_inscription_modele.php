    <?php
/**
 * Created by IntelliJ IDEA.
 * User: epida
 * Date: 04/05/2018
 * Time: 11:06
 */



function getData($email)
{
    include "connect_database_modele.php";
    $req = $bdd->prepare("SELECT ID, mot_de_passe FROM personne WHERE email = '$email';");
    $req->execute(array(
        'email' => $email));
    $resultat = $req->fetch();
    return $resultat['mot_de_passe'];
    //return $resultat['ID'];

}

function getConnexion($email)
    {
        include "connect_database_modele.php";
        $req = $bdd->query("SELECT mot_de_passe FROM personne WHERE email = '$email';");
        while ($donnees = $req->fetch())
        {
            return $donnees['mot_de_passe'];
        };
    }

    function getID($email)
    {
        include "connect_database_modele.php";
        $req = $bdd->query("SELECT ID FROM personne WHERE email = '$email';");
        while ($donnees = $req->fetch())
        {
            return $donnees['ID'];
        };
    }


    function sendData($email, $mot_de_passe)
{
    include "connect_database_modele.php";
    $req = $bdd->prepare("INSERT INTO personne(email,mot_de_passe) VALUES(:email,:mot_de_passe)");
    $req->execute(array(
        'email' => $email,
        'mot_de_passe' => $mot_de_passe,
    ));
}

function changeData($email,$mot_de_passe)
{
    include "connect_database_modele.php";
    $req = $bdd->prepare("UPDATE personne SET mot_de_passe WHERE (email = '.$email'");
    $req->execute(array(
        'mot_de_passe'=>$mot_de_passe,
    ));
}

function getEmail($email)
{
    include "connect_database_modele.php";
    $resultat = $bdd->prepare("SELECT DISTINCT ID FROM personne WHERE email = '$email'");
    $donnees = $resultat->fetch();
    return $donnees;
}



function check_pseudo($email)
{
    include "connect_database_modele.php";
    $nb_email;
    $req = $bdd->prepare('SELECT ID FROM personne WHERE email = ?');
    $req -> execute(array($email));
    $nb_email = $req->fetch();
    return $nb_email['ID'];
}


function getStatut1($id)
{
    include "connect_database_modele.php";
    $req = $bdd->query("SELECT statut FROM personne WHERE personne.id = '$id'");
    while ($a = $req->fetch()) {
        return $a;
    }
}

function setConnected($id){
    include "connect_database_modele.php";
    $req = $bdd->query("INSERT INTO personneconnecte (id_personne) VALUES ('$id') ");
}

function setDisconnected($id){
    include "connect_database_modele.php";
    $req = $bdd->query("DELETE FROM personneconnecte WHERE id_personne = '$id'");
}


?>


