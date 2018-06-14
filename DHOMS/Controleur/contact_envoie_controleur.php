<?php

include "../Modele/contact_modele.php";

$objet=$_POST['objet'];
$message=$_POST['message'];

contact_message($bdd);

header('Location:../Vue/contact_vue.php');

?>