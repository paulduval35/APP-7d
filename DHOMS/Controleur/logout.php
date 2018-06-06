<?php
/**
 * Created by IntelliJ IDEA.
 * User: epida
 * Date: 04/06/2018
 * Time: 11:45
 */
include "url.php";
session_start();
session_destroy();
$url = $DHOMS_URL."/Vue/connexion_inscription_vue.php";
header('Location:'.$url);
