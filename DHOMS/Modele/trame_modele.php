<?php
/**
 * Created by IntelliJ IDEA.
 * User: epida
 * Date: 21/06/2018
 * Time: 14:40
 */

include "../Modele/connect_database_modele.php";

function interpretType($a){
    if ($a == 3){
        $b = "Température";
    }
    elseif ($a == 4){
        $b  = "Humidité";
    }
    elseif ($a == 5){
        $b = "Lumière";
    }
    elseif($a==7){
        $b = "Présence";
    }
    else{
        $b = "Store";
    }
    return $b;
}

function getLastDateCapteur($id){
    global $bdd;
    $req = $bdd->query("SELECT * FROM donnee d 
INNER JOIN (SELECT donnee.ID_controleur, MAX(donnee.date) 
AS maxdate FROM donnee WHERE donnee.ID_controleur = '$id' 
GROUP BY donnee.ID_controleur) last_d ON d.ID_controleur = '$id' AND d.date = last_d.maxdate");

    while ($liste = $req -> fetch()){
        $a = $liste['date'];
        return $a;
    }
}



function compareTime($id,$y,$m,$d,$h,$min,$s){
    $verif=false;
    $date1=date("$y-$m-$d");
    echo $date1."<br>";
    $date=getLastDateCapteur($id);
    echo $date."<br>";
   $split = explode(" ",$date);
   $splitHeure = explode(":", $split[1]);

   if($date1>$split[0]){

       $verif= true;
   }

   elseif($date1==$split[0]){
       if ($h>=$splitHeure[0]){
           if($min>=$splitHeure[1]){
               if($s>=$splitHeure[2]){
                   $verif = true;
               }
           }
       }
   }

   return $verif;
}



function sendToDB($data,$id,$y,$m,$d,$h,$min,$s){
    global $bdd;
    $d = mktime($h,$min,$s,$m,$d,$y);
    $date = date("Y-m-d h:i:sa",$d);
    $req = $bdd->prepare('INSERT INTO donnee(date, donnee, ID_controleur) VALUES(:date, :donnee, :ID_controleur)');
    $req->execute(array(
        'date' => $date,
        'donnee' => $data,
        'ID_controleur' => $id,
    ));
}


function sendTrame($trame){
    global $bdd;
    $ch = curl_init();
    curl_setopt(
        $ch,
        CURLOPT_URL,
        "http://projets-tomcat.isep.fr:8080/appService?ACTION=COMMAND&TEAM=007D&TRAME=".$trame);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);

}

function getTrameToDB(){
    $ch = curl_init();
    curl_setopt(
        $ch,
        CURLOPT_URL,
        "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=007D");
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);
    $data_tab = str_split($data,33);
    for($i=0, $size=count($data_tab); $i<$size; $i++){

        $trame = $data_tab[$i];
        list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
            sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");


        if(compareTime($n,$year, $month, $day, $hour, $min, $sec)){
            sendToDB($v,$n, $year, $month, $day, $hour, $min, $sec);
        }


    }



}

