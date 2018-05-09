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
            <section>
                <div id="ajout_capteurs">

					<ul class = "flex-outer">

	<h2> selectionner le capteur:</h2>
	 
	<p>
<?$selection = $_POST['taskOption'];  ?>
  
<form id ="form_nouv_capteur" action="../Controleur/capteur_controlleur.php" method="post" >

                            <div id ="nouveau_capteur">
                                <div class="nom_capteur">thermometre</div>
                                <div class="nom_capteur">lumière</div>
                                <div class="nom_capteur">stores</div>
                                <div class="nom_capteur">sonore</div>
                            </div>

                            <div id = "icone_capteur" >
                                <div class="selecteur"><img class="icone_capteur" src="image/capteurs/icone_thermometre.png" alt="icone d'un thermomètre"  >
                                    <div class="selecteur-content">
                                        <button id=val class=butto name="subject" type="submit" value="1">modele1</button>
                                        <button id=val class=butto name="subject" type="submit" value="2">modele2</button>
                                        <button id=val class=butto name="subject" type="submit" value="3">modele3</button>
                                    </div>
                                </div>
                                <div class="selecteur"><img class="icone_capteur" src="image/capteurs/icone_thermometre.png" alt="icone d'un thermomètre"  >
                                    <div class="selecteur-content">
                                        <button id=val class=butto name="subject" type="submit" value="1">modele1</button>
                                        <button id=val class=butto name="subject" type="submit" value="2">modele2</button>
                                        <button id=val class=butto name="subject" type="submit" value="3">modele3</button>
                                    </div>
                                </div>
                                <div class="selecteur"><img class="icone_capteur" src="image/capteurs/icone_thermometre.png" alt="icone d'un thermomètre"  >
                                    <div class="selecteur-content">
                                        <button id=val class=butto name="subject" type="submit" value="1">modele1</button>
                                        <button id=val class=butto name="subject" type="submit" value="2">modele2</button>
                                        <button id=val class=butto name="subject" type="submit" value="3">modele3</button>
                                    </div>
                                </div>
                                <div class="selecteur"><img class="icone_capteur" src="image/capteurs/icone_thermometre.png" alt="icone d'un thermomètre"  >
                                    <div class="selecteur-content">
                                        <button id=val class=butto name="subject" type="submit" value="1">modele1</button>
                                        <button id=val class=butto name="subject" type="submit" value="2">modele2</button>
                                        <button id=val class=butto name="subject" type="submit" value="3">modele3</button>
                                    </div>
                                </div>


                            </div>
                            <div id ="nouveau_capteur">
                                <div class="nom_capteur">thermometre</div>
                                <div class="nom_capteur">lumière</div>
                                <div class="nom_capteur">stores</div>
                                <div class="nom_capteur">sonore</div>
                            </div>

                            <div id = "icone_capteur" >
                                <div class="selecteur"><img class="icone_capteur" src="image/capteurs/icone_thermometre.png" alt="icone d'un thermomètre"  >
                                    <div class="selecteur-content">
                                        <button id=val class=butto name="subject" type="submit" value="1">modele1</button>
                                        <button id=val class=butto name="subject" type="submit" value="2">modele2</button>
                                        <button id=val class=butto name="subject" type="submit" value="3">modele3</button>
                                    </div>
                                </div>
                                <div class="selecteur"><img class="icone_capteur" src="image/capteurs/icone_thermometre.png" alt="icone d'un thermomètre"  >
                                    <div class="selecteur-content">
                                        <button id=val class=butto name="subject" type="submit" value="1">modele1</button>
                                        <button id=val class=butto name="subject" type="submit" value="2">modele2</button>
                                        <button id=val class=butto name="subject" type="submit" value="3">modele3</button>
                                    </div>
                                </div>
                                <div class="selecteur"><img class="icone_capteur" src="image/capteurs/icone_thermometre.png" alt="icone d'un thermomètre"  >
                                    <div class="selecteur-content">
                                        <button id=val class=butto name="subject" type="submit" value="1">modele1</button>
                                        <button id=val class=butto name="subject" type="submit" value="2">modele2</button>
                                        <button id=val class=butto name="subject" type="submit" value="3">modele3</button>
                                    </div>
                                </div>
                                <div class="selecteur"><img class="icone_capteur" src="image/capteurs/icone_thermometre.png" alt="icone d'un thermomètre"  >
                                    <div class="selecteur-content">
                                        <button id=val class=butto name="subject" type="submit" value="1">modele1</button>
                                        <button id=val class=butto name="subject" type="submit" value="2">modele2</button>
                                        <button id=val class=butto name="subject" type="submit" value="3">modele3</button>
                                    </div>
                                </div>


                            </div>
                            <div id ="nouveau_capteur">
                                <div class="nom_capteur">thermometre</div>
                                <div class="nom_capteur">lumière</div>
                                <div class="nom_capteur">stores</div>
                                <div class="nom_capteur">sonore</div>
                            </div>

                            <div id = "icone_capteur" >
                                <div class="selecteur"><img class="icone_capteur" src="image/capteurs/icone_thermometre.png" alt="icone d'un thermomètre"  >
                                    <div class="selecteur-content">
                                        <button id=val class=butto name="subject" type="submit" value="1">modele1</button>
                                        <button id=val class=butto name="subject" type="submit" value="2">modele2</button>
                                        <button id=val class=butto name="subject" type="submit" value="3">modele3</button>
                                    </div>
                                </div>
                                <div class="selecteur"><img class="icone_capteur" src="image/capteurs/icone_thermometre.png" alt="icone d'un thermomètre"  >
                                    <div class="selecteur-content">
                                        <button id=val class=butto name="subject" type="submit" value="1">modele1</button>
                                        <button id=val class=butto name="subject" type="submit" value="2">modele2</button>
                                        <button id=val class=butto name="subject" type="submit" value="3">modele3</button>
                                    </div>
                                </div>
                                <div class="selecteur"><img class="icone_capteur" src="image/capteurs/icone_thermometre.png" alt="icone d'un thermomètre"  >
                                    <div class="selecteur-content">
                                        <button id=val class=butto name="subject" type="submit" value="1">modele1</button>
                                        <button id=val class=butto name="subject" type="submit" value="2">modele2</button>
                                        <button id=val class=butto name="subject" type="submit" value="3">modele3</button>
                                    </div>
                                </div>
                                <div class="selecteur"><img class="icone_capteur" src="image/capteurs/icone_thermometre.png" alt="icone d'un thermomètre"  >
                                    <div class="selecteur-content">
                                        <button id=val class=butto name="subject" type="submit" value="1">modele1</button>
                                        <button id=val class=butto name="subject" type="submit" value="2">modele2</button>
                                        <button id=val class=butto name="subject" type="submit" value="3">modele3</button>
                                    </div>
                                </div>


                            </div>


    


    </form>
                </div>

		 </ul>
            </section>
            <footer>
                <?php include "footer.php"?>
            </footer>
        </div>
	 </body>
</html>