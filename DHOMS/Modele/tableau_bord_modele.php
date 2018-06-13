<?php

include "connect_database_modele.php";

function getMaisons($ID_personne_connecte){
    global $bdd;
    $reponse = $bdd->query("SELECT DISTINCT * 
FROM habitation JOIN appartenance_maison ON habitation.ID = appartenance_maison.ID_habitation 
WHERE appartenance_maison.ID_personne = '$ID_personne_connecte'");

    return $reponse;
}

function getNomMaison($id_maison){
    global $bdd;
    $reponse = $bdd->query("SELECT habitation.nom FROM habitation WHERE habitation.id = '$id_maison'");
    $retour = $reponse->fetch();
    return $retour['nom'];
}

function getPieces($id_maison){
    global $bdd;
    $listePiece = $bdd->query("SELECT * FROM piece WHERE piece.ID_habitation = '$id_maison'");
    return $listePiece;
}

function getCapteur($id_piece){
    global $bdd;
    $listeCapteur = $bdd->query("SELECT * FROM controleur WHERE controleur.ID_piece ='$id_piece'");
    return $listeCapteur;
}

function getValuesCapteur($id_capteur){
    global $bdd;
    $listeValeursCapteurs = $bdd->query("SELECT * FROM donnee d 
INNER JOIN (SELECT donnee.ID_controleur, MAX(donnee.date) 
AS maxdate FROM donnee WHERE donnee.ID_controleur = '$id_capteur' 
GROUP BY donnee.ID_controleur) last_d ON d.ID_controleur = '$id_capteur' AND d.date = last_d.maxdate");

    while ($liste = $listeValeursCapteurs -> fetch()){
        $a = $liste['donnee'];
        return $a;
    }
}

function getCategorieCapteur($id_controleur){
    global $bdd;
    $categorie = $bdd->query("SELECT categorie FROM controleur WHERE controleur.ID ='$id_controleur'");
    while ($liste = $categorie -> fetch()){
        $a = $liste['categorie'];
        return $a;
    }
}



function getValuesProgrammationCapteur($id_capteur){
    global $bdd;
    $listeValeursProgrammationCapteurs = $bdd->query("SELECT * FROM programmation p 
INNER JOIN (SELECT programmation.ID_controleur, MAX(programmation.date_execution) 
AS maxdate FROM programmation WHERE programmation.ID_controleur = '$id_capteur' 
GROUP BY programmation.ID_controleur) last_p ON p.ID_controleur = '$id_capteur' AND p.date_execution = last_p.maxdate");

    while ($liste = $listeValeursProgrammationCapteurs -> fetch()){
        $a = $liste['donnee'];
        return $a;
    }

}

function postValeurProgrammationControleur($ID_controleur,$valeur_action){ //$ID_personne sera à rajouter
    global $bdd;
    $ID_programmation = "";
    $ID_personne = "1";
    $date = date("Y-m-d H:i:s");

    if (getCategorieCapteur($ID_controleur)=="Lumière" or getCategorieCapteur($ID_controleur)=="Présence"){
        $ID_donnee = "";
        if ($valeur_action=="on"){
            $valeur_action="1";
            $valeur_etat="Allumé";
        }
        else {
            $valeur_action="0";
            $valeur_etat="Éteint";
        }
        $req = $bdd->prepare('INSERT INTO donnee(ID, date, donnee, ID_controleur) VALUES(:ID, :date, :donnee, :ID_controleur)');
        $req->execute(array(
            'ID' => $ID_donnee,
            'date' => $date,
            'donnee' => $valeur_action,
            'ID_controleur' => $ID_controleur,
        ));

        $req = $bdd->prepare("UPDATE controleur SET etat = '$valeur_etat' WHERE controleur.ID = '$ID_controleur';");
        $req->execute();
    }

    $req = $bdd->prepare('INSERT INTO programmation(ID, valeur_action, date_execution, ID_personne) VALUES(:ID, :valeur_action, :date_execution, :ID_personne)');
    $req->execute(array(
        'ID' =>$ID_programmation,
        'valeur_action' => $valeur_action,
        'date_execution' => $date,
        'ID_personne' => $ID_personne,
    ));
    $ID_programmation = $bdd->lastInsertId();
    $ID_lien_control_program = "";
    $req = $bdd->prepare('INSERT INTO lien_control_program(ID, ID_controleur, ID_programmation) VALUES(:ID, :ID_controleur, :ID_programmation)');
    $req->execute(array(
        'ID' => $ID_lien_control_program,
        'ID_programmation' =>$ID_programmation,
        'ID_controleur' => $ID_controleur,
    ));


}

function getStatut($id_maison, $id_personne){
    global $bdd;
    $req = $bdd ->query("SELECT appartenance_maison.Statut FROM appartenance_maison WHERE appartenance_maison.id_habitation = '$id_maison' AND appartanance_maison.id_personne = '$id_personne'");
    while($a = $req->fetch()){
        $retour = $a['Statut'];
    }
    return $retour;
}

?>
