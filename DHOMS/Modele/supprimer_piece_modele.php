<?php
global $bdd;
include "connect_database_modele.php";

function findPiece($value){//ressort la liste des  piece
   global $bdd;

	$query = $bdd->prepare("SELECT * FROM piece WHERE piece.ID_habitation = '$value'");
		$query->execute();
		
			
			
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<?php
if ($query->rowCount() > 0) { ?>
  <select class="select_piece" name="pieceselect">
    <?php foreach ($results as $row) { ?>
      <option value="<?php echo $row['ID']; ?>"><?php echo $row['nom'];?></option>
	  
    <?php } ?>
  </select>
<?php } }

function removePiece($value){
global $bdd;

	$query = $bdd->prepare("DELETE FROM piece WHERE `piece`.`ID` = '$value'");
	$query->execute();
}
?>