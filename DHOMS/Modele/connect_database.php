<?php

// CONNEXION A LA BDD

   $dbname = "dhoms";
   $host='localhost';
   $user='root';
   $pass=

   try {
       $db = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$pass");
       $db->query("SET NAMES UTF8");
       $_SERVER['name'] = $db;

   } catch (Exception $e) {
       die('Erreur: '.$e->getMessage());
   }

?>