<?php 
$ID = $_POST['pieceselect'];

include "../Modele/supprimer_piece_modele.php"; 

removePiece($ID);
?>
<script language="javascript">
 window.location.href = "../Controleur/tableau_bord_controleur.php";</script>



