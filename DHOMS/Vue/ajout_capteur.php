<!DOCTYPE html>
<html lang="en">
<!--remarque: je travaille uniquement sur la première option pour l'instant-->
<head>
    <title>DHOMS</title>
    <meta charset="UTF-8">
    <link rel= "stylesheet" href="style.css" />
	<!-- commentaire -->
</head>

<body> 
         
        <nav>
            <?php include "nav.php"?>
        </nav>

        <div id="header_footer">
            <header>
                <?php include "header.php"?>
            </header>          
					<ul class = "flex-outer">

	<h2> selectionner le capteur:</h2>
	 
	<p>
<?$selection = $_POST['taskOption'];  ?>
<table style="width:100%">
  
<form id ="nouveau_capteur" action="../Controleur/capteur_controlleur.php" method="post" >
  
  
  <tr>
    <th>thermometre</th>
    <th>lumière</th> 
    <th>stores</th>
	<th>sonore</th>

  </tr>
  <tr>
    <th><div class="dropdown">
	<img src="image/capteurs/thermometer.png" alt="whatever"  >
	<div class="dropdown-content">
	<button id=val class=butto name="subject" type="submit" value="1">modele1</button>
    <button id=val class=butto name="subject" type="submit" value="2">modele2</button>
	<button id=val class=butto name="subject" type="submit" value="3">modele3</button>

	</div>
</div></th>
    
  
    <th>
	<div class="dropdown">
<img src="image/accueil/accueil.png" alt="whatever"  >
<div class="dropdown-content">
    <a href="#">modele 1.1 </a>
    <a href="#">modele 1.2 </a>
    <a href="#">modele 1.3 </a>
  </div>
</div>
			</a></th>
    
 
    <th><a href="ajouter_stores.php">
		<div class="dropdown">
<img src="image/accueil/accueil.png" alt="whatever"  >
<div class="dropdown-content">
    <a href="#">modele 1 1</a>
    <a href="#">modele 1 2</a>
    <a href="#">modele 1 3</a>
  </div>
</div>
			</th>
	<th><div class="dropdown">
<img src="image/accueil/accueil.png" alt="whatever"  >
<div class="dropdown-content">
    <a href="#">modele 1 1</a>
    <a href="#">modele 1 2</a>
    <a href="#">modele 1 3</a>
  </div>
</div></th>
	<tr>   </tr>		
			
	<tr>
    <th>machin</th>
    <th>bidule</th> 
    <th>truc</th>
	<th>chouette</th>

  </tr>
  <tr>
  </tr>
  <tr>
    <th><div class="dropdown">
<img src="image/accueil/accueil.png" alt="whatever"  >
<div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div></th>
    
  
    <th><div class="dropdown">
<img src="image/accueil/accueil.png" alt="whatever"  >
<div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div></th>
    
 
    <th><div class="dropdown">
<img src="image/accueil/accueil.png" alt="whatever"  >
<div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div></th>
			
	<th><div class="dropdown">
<img src="image/accueil/accueil.png" alt="whatever"  >
<div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div></th>
    

	</p>
	
	 </form>
	</table> 
	<p>les icons proviennent de Freepik  (www.flaticon.com) </p>
		 </ul>

	 </body>