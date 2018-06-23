<?php

$nom=$_POST["nom"]; 
$surface=$_POST["surface"];
$maison=$_POST["IDmaison"];

include "../Modele/ajouter_piece_modele.php";
if( insertPiece($nom,$surface,$maison)){
?> 
<script language="javascript">
		alert( "la piece a été ajouté");
 window.location.href = "../Controleur/tableau_bord_controleur.php";</script>
<?php
exit();
}else{ ?>
    <script>
alert( "erreur");
 window.location.href = "../Controleur/tableau_bord_controleur.php</script>

<?php
}
?>