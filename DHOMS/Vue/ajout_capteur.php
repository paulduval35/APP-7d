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
  
<form id ="form_nouv_capteur" action="../Controleur/capteur_controleur.php" method="post" >

                            <div id ="nouveau_capteur">
                                <div class="nom_capteur">Température</div>
                                <div class="nom_capteur">Luminosité</div>
                                <div class="nom_capteur">Humidité</div>
                                <div class="nom_capteur">Présence</div>
                            </div>

                            <div id = "icone_capteur" >
                                <div class="selecteur"><img class="icone_capteur" src="image/capteurs/Température.png" alt="icone d'un thermomètre"  >
                                    <div class="selecteur-content">
                                        <button id=val class=boutton_choix name="subject" type="submit" value="1">Capteur BX75</button>
                                        <button id=val class=boutton_choix name="subject" type="submit" value="2">Capteur BX72</button>
                                        <button id=val class=boutton_choix name="subject" type="submit" value="3">Capteur XF25</button>
                                        <button id=val class=boutton_choix name="subject" type="submit" value="3">Capteur XF126</button>
                                    </div>
                                </div>
                                <div class="selecteur"><img class="icone_capteur" src="image/capteurs/Lumière.png" alt="icone d'un thermomètre"  >
                                    <div class="selecteur-content">
                                        <button id=val class=boutton_choix name="subject" type="submit" value="1">Capteur LX715</button>
                                        <button id=val class=boutton_choix name="subject" type="submit" value="2">Capteur LX256</button>
                                        <button id=val class=boutton_choix name="subject" type="submit" value="3">Capteur LX758</button>
                                        <button id=val class=boutton_choix name="subject" type="submit" value="2">Capteur LX512</button>
                                        <button id=val class=boutton_choix name="subject" type="submit" value="3">Capteur LXX23</button>
                                    </div>
                                </div>
                                <div class="selecteur"><img class="icone_capteur" src="image/capteurs/Humidité.png" alt="icone d'un thermomètre"  >
                                    <div class="selecteur-content">
                                        <button id=val class=boutton_choix name="subject" type="submit" value="1">Capteur HM25</button>
                                        <button id=val class=boutton_choix name="subject" type="submit" value="2">Capteur HM74</button>
                                        <button id=val class=boutton_choix name="subject" type="submit" value="3">Capteur HMX226</button>
                                    </div>
                                </div>
                                <div class="selecteur"><img class="icone_capteur" src="image/capteurs/Présence.png" alt="icone d'un thermomètre"  >
                                    <div class="selecteur-content">
                                        <button id=val class=boutton_choix name="subject" type="submit" value="1">Capteur PR12</button>
                                        <button id=val class=boutton_choix name="subject" type="submit" value="2">Capteur PR036</button>
                                        <button id=val class=boutton_choix name="subject" type="submit" value="3">Capteur PR786</button>
                                    </div>
                                </div>

<br><br>
                            </div>
                            <div id ="nouveau_capteur">
                                <div class="nom_capteur">Store</div>
                                <div class="nom_capteur">Fenêtre</div>
                                <div class="nom_capteur">Capteur X</div>
                                <div class="nom_capteur">Capteur Y</div>
                            </div>

                            <div id = "icone_capteur" >
                                <div class="selecteur"><img class="icone_capteur" src="image/capteurs/Store.png" alt="icone d'un thermomètre"  >
                                    <div class="selecteur-content">
                                        <button id=val class=boutton_choix name="subject" type="submit" value="1">Capteur STR52</button>
                                        <button id=val class=boutton_choix name="subject" type="submit" value="2">Capteur STR8</button>
                                        <button id=val class=boutton_choix name="subject" type="submit" value="3">Capteur STR96</button>
                                    </div>
                                </div>
                                <div class="selecteur"><img class="icone_capteur" src="image/capteurs/plus.png" alt="icone d'un thermomètre"  >
                                    <div class="selecteur-content">
                                        <button id=val class=boutton_choix name="subject" type="submit" value="1">Capteur FNT223</button>
                                        <button id=val class=boutton_choix name="subject" type="submit" value="2">Capteur FNT45</button>
                                        <button id=val class=boutton_choix name="subject" type="submit" value="3">Capteur FNT76</button>
                                    </div>
                                </div>
                                <div class="selecteur"><img class="icone_capteur" src="image/capteurs/plus.png" alt="icone d'un thermomètre"  >
                                    <div class="selecteur-content">
                                        <button id=val class=boutton_choix name="subject" type="submit" value="1">Capteur XX78</button>
                                        <button id=val class=boutton_choix name="subject" type="submit" value="3">Capteur XX7</button>
                                    </div>
                                </div>
                                <div class="selecteur"><img class="icone_capteur" src="image/capteurs/plus.png" alt="icone d'un thermomètre"  >
                                    <div class="selecteur-content">
                                        <button id=val class=boutton_choix name="subject" type="submit" value="1">Capteur Y85</button>
                                        <button id=val class=boutton_choix name="subject" type="submit" value="2">Capteur Y41</button>
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