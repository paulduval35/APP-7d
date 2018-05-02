<?php

// TEST PREMIERE METHODE DE CONNEXION A LA BDD

//   $dbname = "dhoms";
//   $host='localhost';
//   $user='root';
//   $pass=

//   try {
//       $db = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$pass");
//       $db->query("SET NAMES UTF8");
//       $_SERVER['name'] = $db;

//   } catch (Exception $e) {
//       die('Erreur: '.$e->getMessage());
//   }

// TEST DEUXIEME METHODE DE CONNEXION A LA BDD

$bdd = new PDO('mysql:host=localhost:3306;dbname=dhoms;charset=utf8', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>
