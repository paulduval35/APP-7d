<?php

// CONNEXION A LA BDD

   $dbname = "dhoms";
   $host='localhost';
   $user='root';


   try {
       $db = new PDO("mysql:host=$host;dhoms=$dbname", "$user", "");
       $db->query("SET NAMES UTF8");
       $_SERVER['name'] = $db;

   } catch (Exception $e) {
       die('Erreur: '.$e->getMessage());
   }

?>