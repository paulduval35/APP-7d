<?php

  /*Fonction pour inscrire un utilisateur secondaire*/
  function secondary_user_register($db) {
      $pass_hache = sha1($_POST['mdp']);

      //Date variables
      $today = date("Y-m-d H:i:s");
      $dte=$_POST['date_naissance'];
      $mm=$dte[0].$dte[1];
      $dd=$dte[3].$dte[4];
      $aaaa=$dte[6].$dte[7].$dte[8].$dte[9];
      $date_naissance=$aaaa.'-'.$mm.'-'.$dd;

      $req3 = $db->prepare('INSERT INTO utilisateur(nom, prenom, email, numero_de_telephone, adresse, type,
      login, mot_de_passe, date_d_ajout, date_naissance,	id_utilisateur_1)

      VALUES(:nom, :prenom, :email, :numero_de_telephone, :adresse, :type, :login, :mot_de_passe,
      :date_d_ajout, :date_naissance,	:id_utilisateur_1)');

      $req3 -> execute(array(
      'nom' => $_POST['nom'],
      'prenom' => $_POST['prenom'],
      'email' => $_POST['email'],
      'numero_de_telephone' => $_SESSION['numero_de_telephone'],
      'adresse' => $_SESSION['adresse'],
      'type' => "secondaire",
      'login' => $_POST['login'],
      'mot_de_passe' => $pass_hache,
      'date_d_ajout' => $today,
      'date_naissance' => $date_naissance,
      'id_utilisateur_1' =>$_SESSION['id_utilisateur']
      ));

      //Creation de droit NULL pour l'utilisateur secondaire
      $identifiant = $_POST['login'];
      $sql = "SELECT id_utilisateur FROM utilisateur WHERE login = '".$identifiant."'";
      $req = $db->query ($sql);
      $userid = $req -> fetch();

      $array_liste_piece = get_primary_user_piece_list($db);

      $line = 0;

      do {
          $piece_primaire = $array_liste_piece[$line]['id_piece'];

              if (isset($piece_primaire)) {
                  $req = $db->prepare('INSERT INTO droit(droit_d_utilisateur, date_de_modification_des_droits, id_utilisateur, id_piece) VALUES(:droit_d_utilisateur, :date_de_modification_des_droits, :id_utilisateur, :id_piece)');
                  $req->execute(array(
                  'droit_d_utilisateur' => NULL,
                  'date_de_modification_des_droits' => $today,
                  'id_utilisateur' => $userid['id_utilisateur'],
                  'id_piece' => $piece_primaire
                  ));
                  $line++;
                  $next_user = $array_liste_piece[$line]['id_piece'];
              }
          } while (isset($next_user));
      }

  /*Fonction pour afficher toutes les pieces de l'utilisateur primaire */
  function get_primary_user_piece_list($db) {
      $user_id = $_SESSION['id_utilisateur'];
      $sql = "SELECT id_piece, localisation_dans_la_maison FROM piece WHERE id_piece IN (SELECT id_piece FROM droit WHERE id_utilisateur = '".$user_id."')";
      $request = $db->query ($sql);
      $piece_owned_by_primary_user = $request -> fetchAll();

      return $piece_owned_by_primary_user;
  }

  /*Fonction pour obtenir le mot de passe de l'utilisateur*/
  function get_password($db, $id) {
      $sql = 'SELECT mot_de_passe FROM utilisateur WHERE id_utilisateur ="'.$id.'"';
      $req = $db->query ($sql);
      $user_password = $req -> fetch();

      return $user_password;
  }

  /*Fonction pour obtenir l'id de l'utilisateur à la connexion*/
      function get_user_id($db,$login) {
      $sql = "SELECT id_utilisateur FROM utilisateur WHERE login = '".$login."'";
      $req = $db->query ($sql);
      $userid = $req -> fetch();

      return $userid;
  }

  /*Fonction pour obtenir les informations de l'utilisateur, prit en utilisant la méthode POST*/
  function get_profil($db, $userid) {
      $sql = "SELECT * FROM utilisateur WHERE id_utilisateur = '".$userid."'";

      $req = $db->query ($sql);
      $donnees = $req -> fetch();

      $_POST['nom'] = $donnees['nom'];
      $_POST['prenom'] = $donnees['prenom'];
      $_POST['email'] = $donnees['email'];
      $_POST['numero_de_telephone'] = $donnees['numero_de_telephone'];
      $_POST['adresse'] = $donnees['adresse'];
      $_POST['login'] = $donnees['login'];
      $_POST['date_de_naissance'] = $donnees['date_naissance'];
      $_POST['date_d_ajout'] = $donnees ['date_d_ajout'];
  }

  /*Fonction qui créé un tableau de tous les utilisateurs secondaires d'un utilisateur primaire*/
  function get_secondary_user($db) {
      $user_id = $_SESSION['id_utilisateur'];
      $sql = "SELECT id_utilisateur, prenom, nom, login, email FROM utilisateur WHERE id_utilisateur_1 = '".$user_id."'";
      $request = $db->query ($sql);
      $secondary_users_array = $request -> fetchAll();

      return $secondary_users_array;
  }

  /*Fonction pour faire un tableau des droits d'un utilisateur secondaire*/
  function get_primary_user_piece_rights($db, $user_id) {
      $sql = "SELECT droit_d_utilisateur, id_piece FROM droit WHERE id_utilisateur = '".$user_id."'";
      $request = $db->query ($sql);
      $donnees = $request -> fetchAll();
      $result = array();
      //loop to change the current array line id to id_piece, in order to iterate in the array with the id_piece
      foreach ($donnees as $array) {
          $result[$array['id_piece']] = $array;
      }

      return $result;
  }

  /*Fonction pour modifier les infos de l'utilisateur*/
  function profile_modification($modification, $id, $db) {
      $sql = "UPDATE utilisateur SET " . $modification . " WHERE id_utilisateur = '" .$id. "'";
      $modif = $db->query($sql);
  }

  /*Fonction pour modifier les droits d'utilisateur pour une piece précise*/
  function edit_secondary_users_rights($edit, $user_id, $id_piece, $db) {
      $today = date("Y-m-d H:i:s");
      $sql = "UPDATE droit SET droit_d_utilisateur = '$edit', date_de_modification_des_droits = '" . $today ."' WHERE id_utilisateur = '" .$user_id. "' AND id_piece = '" .$id_piece. "'";
      $request = $db->query($sql);
  }

  /*Fonction pour mettre dans $_SESSION toutes les informations de l'utilisateur connecté*/
  function set_session_current_user($db, $identifiant) {
      $sql = "SELECT * FROM utilisateur WHERE login = '".$identifiant."'";
      $request = $db->query ($sql);
      $donnees = $request -> fetch();

      $_SESSION['nom'] = $donnees['nom'];
      $_SESSION['prenom'] = $donnees['prenom'];
      $_SESSION['email'] = $donnees['email'];
      $_SESSION['numero_de_telephone'] = $donnees['numero_de_telephone'];
      $_SESSION['adresse'] = $donnees['adresse'];
      $_SESSION['login'] = $donnees['login'];
      $_SESSION['date_de_naissance'] = $donnees['date_naissance'];
      $_SESSION['date_d_ajout'] = $donnees ['date_d_ajout'];
      $_SESSION['id_utilisateur'] = $donnees['id_utilisateur'];
      $_SESSION['id_utilisateur_1'] = $donnees['id_utilisateur_1'];
      $_SESSION['type'] = $donnees['type'];
  }

  /*Fonction pour supprimer un utilisateur*/
  function delete_user($db, $user_id) {
      $connected_user = $_SESSION['id_utilisateur'];

      //Pour supprimer le compte principal
      if ($user_id == $connected_user) {
          //Supprimer le compte actuel
          $sql = "DELETE FROM utilisateur WHERE id_utilisateur = '".$user_id."'" ;
          $request = $db -> query($sql);
          //Supprimer tous les utilisateurs secondaires
          $sql = "DELETE FROM utilisateur WHERE id_utilisateur_1 = '".$user_id."'" ;
          $request = $db -> query($sql);

          //suppression des pièces reliées à l'utilisateur
          $sql = "DELETE FROM piece WHERE id_piece IN (SELECT id_piece FROM droit WHERE id_utilisateur = '".$id_utilisateur."')" ;
          $request = $db -> exec($sql);

          //suppression des objets reliés à l'utilisateur de chaque pièce
          $sql = "DELETE FROM objet_connecte WHERE id_piece IN (SELECT id_piece FROM droit WHERE id_utilisateur = '".$id_utilisateur."')" ;
          $request = $db -> exec($sql);

          //remettre les numéros de série à 1 dans la table numéro de série
          $sql = 'UPDATE numero_serie SET activation="1" WHERE numero_de_serie IN (SELECT numero_de_serie FROM objet_connecte)';
          $request = $db -> exec($sql);

          //Mettre le numéro de série des capteurs utilisé à 1
          $line = 0;

          do {
              $secondary_user_array = $_POST['secondary_user_id'];
              $secondary_user_id = $secondary_user_array[$line]['id_utilisateur'];
              $sql = "DELETE FROM droit WHERE id_utilisateur = '".$secondary_user_id."'" ;
              $request = $db -> query($sql);
              $line++;
              $next_user = $secondary_user_id[$line]['id_utilisateur'];
          } while (isset($next_user));

      } else {
          //delete a secondary account
          $sql = "DELETE FROM utilisateur WHERE id_utilisateur = '".$user_id."'" ;
          $request = $db -> query($sql);
          //delete all his rights on every room
          $sql = "DELETE FROM droit WHERE id_utilisateur = '".$user_id."'" ;
          $request = $db -> query($sql);
      }
  }

  /*Fonction qui ajoute le premier capteur ajouté à l'inscription */
  function ajout_premier_capteur($db, $login_user, $cle) {
      //Variable qui contient la date d'aujourd'hui et l'heure
      $today = date("Y-m-d H:i:s");
      //récupération de la catégorie
      $reponse = $db->query('SELECT id_categorie FROM numero_serie WHERE numero_de_serie ="'.$cle.'"');
      $type = $reponse ->fetch();
      //récupération de l'id de l'utilisateur inscrit
      $request = $db->query("SELECT id_utilisateur FROM utilisateur WHERE login = '".$login_user."'");
      $id_user = $request -> fetch();
      //création d'une pièce d'exemple contenant l'objet
      $req2 = $db->prepare('INSERT INTO piece(localisation_dans_la_maison, description_de_la_piece, date_d_ajout, date_de_derniere_modification)
      VALUES(:localisation_dans_la_maison, :description_de_la_piece, :date_d_ajout, :date_de_derniere_modification)');

      //Execute
      $req2->execute(array(
      'localisation_dans_la_maison' => "Exemple de pièce",
      'description_de_la_piece' => NULL,
      'date_d_ajout' => $today,
      'date_de_derniere_modification' => $today
      ));
      //récupération de l'id de la pièce
      $req3 = $db->query('SELECT id_piece FROM piece WHERE date_d_ajout = "'.$today.'"');
      $id_piece = $req3 -> fetch();

      //Insertion dans la table des droits
      $req4 = $db->prepare('INSERT INTO droit(droit_d_utilisateur, date_de_modification_des_droits, id_utilisateur, id_piece)
      VALUES (:droit_d_utilisateur,:date_de_modification_des_droits, :id_utilisateur, :id_piece)');

      //execute
      $req4->execute(array(
      'droit_d_utilisateur' => 'primaire',
      'date_de_modification_des_droits' => $today,
      'id_utilisateur' => $id_user['id_utilisateur'],
      'id_piece' => $id_piece['id_piece']
      ));

      //requete d'insertion du cpteur dans la piece
      $piece_req = $db->prepare('INSERT INTO objet_connecte( numero_de_serie, date_d_installation, etat_de_fonctionnement, date_de_modification, id_piece, id_categorie)
      VALUES(:numero_de_serie, :date_d_installation, :etat_de_fonctionnement, :date_de_modification, :id_piece, :id_categorie)');
      //Execution de la requête
      $piece_req->execute(array(
      'numero_de_serie' => $cle,
      'date_d_installation' => $today,
      'etat_de_fonctionnement' => ON,
      'date_de_modification' => $today,
      'id_piece' => $id_piece['id_piece'],
      'id_categorie' => $type[0]
      ));
  }

  // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
  function mdp($db,$identifiant) {
      $reponse = $db->query('SELECT id_utilisateur, mot_de_passe FROM utilisateur WHERE login="'.$identifiant.'"');
      return $reponse;
  }

  // fonction qui cherche tous les logins des utilisateurs dans la base de données
  function recup_all_login($db) {
      $reponse = $db->query('SELECT login FROM utilisateur');
      return $reponse;
  }

  function inscription_utilisateur($db) {
      $adresse = $_POST['type_voie'].' '.$_POST['code_postal'].' '.$_POST['ville'];
      // Hachage du mot de passe
      $pass_hache = sha1($_POST['mdp']);
      //Variable qui contient la date d'aujourd'hui
      $today = date("Y-m-d H:i:s");
      $dte=$_POST['date_naissance'];
      $dd=$dte[0].$dte[1];
      $mm=$dte[3].$dte[4];
      $aaaa=$dte[6].$dte[7].$dte[8].$dte[9];
      $date_naissance=$aaaa.'-'.$mm.'-'.$dd;

      $req = $db->prepare('INSERT INTO utilisateur(nom, prenom, email, numero_de_telephone, adresse, type,
      login, mot_de_passe, date_d_ajout, date_naissance,	id_utilisateur_1)

      VALUES(:nom, :prenom, :email, :numero_de_telephone, :adresse, :type, :login, :mot_de_passe,
      :date_d_ajout, :date_naissance,	:id_utilisateur_1)');

      $req->execute(array(
      'nom' => $_POST['nom'],
      'prenom' => $_POST['prenom'],
      'email' => $_POST['email'],
      'numero_de_telephone' => $_POST['tel'],
      'adresse' => $adresse,
      'type' => primaire,
      'login' => $_POST['login'],
      'mot_de_passe' => $pass_hache,
      'date_d_ajout' => $today,
      'date_naissance' => $date_naissance,
      'id_utilisateur_1' =>NULL
      ));
  }

  function modif_cle( $cle, $db) {
      $sql = "UPDATE numero_serie SET activation = 'false' WHERE numero_de_serie = '" .$cle. "'";
      $modif = $db->query($sql);
  }

?>