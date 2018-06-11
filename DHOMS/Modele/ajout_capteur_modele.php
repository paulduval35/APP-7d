<?php
global $bdd;
include "connect_database_modele.php";

function insertCapteur($value,$piece){
      global $bdd;

   $query = $bdd->prepare("SELECT categorie, `type`, ID, reference FROM reference_capteur WHERE `reference_capteur`.`reference` = '$value'");
   
$query->execute();
$row = $query->fetch();

$type=$row['type'];
$categorie=$row['categorie'];
$reference=$row['reference'];


$query = $bdd->prepare ( "INSERT INTO `controleur` (`categorie`, `type`, `ID_piece`,`reference`) VALUES (?,?,?,?)") ; 
$query->execute([$categorie, $type, $piece,$reference]);

}

function findCapteur($value){//ressort la liste des capteurs dans une piece
   global $bdd;

	$query = $bdd->prepare("SELECT * FROM controleur WHERE controleur.ID_piece = '$value'");
		$query->execute();
		
			
			
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<form action="../Controleur/supprimer_capteur_controleur.php" method="post" id="supp_capt">
<?php
if ($query->rowCount() > 0) { ?>
  <select name="pieceselect">
    <?php foreach ($results as $row) { ?>
      <option value="<?php echo $row['ID']; ?>"><?php echo $row['categorie'];?></option>
	  
    <?php } ?>
  </select>
<?php } ?>
<br>

<input type="submit" name="boutonsupp" value="Supprimer ce capteur">

</form>

<?php	
}


function removeCapteur($value){
global $bdd;

	$query = $bdd->prepare("DELETE FROM controleur WHERE `controleur`.`ID` = '$value'");
	$query->execute();
}

?>