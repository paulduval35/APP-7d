<?php
include "url.php";
include "../Modele/connexion_inscription_modele.php";
session_start();
session_destroy();
setDisconnected($_SESSION['ID']);
$url = $DHOMS_URL."/Vue/connexion_inscription_vue.php";
header('Location:'.$url);