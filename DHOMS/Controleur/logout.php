<?php
/**
 * Created by IntelliJ IDEA.
 * User: epida
 * Date: 04/06/2018
 * Time: 11:45
 */
session_start();
session_destroy();
header('Location: http://localhost:63342/site_app/APP-7d/DHOMS/Vue/connexion_inscription_vue.php');
