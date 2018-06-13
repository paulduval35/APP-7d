<?php 
$ID = $_POST['pieceselect'];

include "../Modele/supprimer_piece_modele.php"; 

removePiece($ID);
?>
<script language="javascript">
		alert( "la piece a été supprimé")
 window.location.href = "../Controleur/tableau_bord_controleur.php";</script>



