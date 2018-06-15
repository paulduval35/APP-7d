<!DOCTYPE html>
<html lang="fr">
<head>
    <title>DHOMS</title>
    <meta charset="UTF-8">
    <link rel= "stylesheet" href="../Vue/style.css" />
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

	<h3 class="connexion_inscription">Sélectionner le capteur à ajouter:</h3>

<form id ="form_nouv_capteur" action="../Controleur/ajout_capteur_page_2_controleur.php" method="post" >
                            <input type="hidden" name="ID_piece" value="<?php echo $piece?>">
                            <div id ="nouveau_capteur">
                                <div class="nom_capteur">Température</div>
                                <div class="nom_capteur">Luminosité</div>
                                <div class="nom_capteur">Humidité</div>
                                <div class="nom_capteur">Présence</div>
                            </div>

                            <div id = "icone_capteur" >
                                <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/Température.png" alt="icone d'un thermomètre"  >
                                    <div class="selecteur-content">
                                        <button id=val class=bouton_choix name="subject" type="submit" value="BX75">Capteur BX75</button>
                                        <button id=val class=bouton_choix name="subject" type="submit" value="BX72">Capteur BX72</button>
                                        <button id=val class=bouton_choix name="subject" type="submit" value="XF25">Capteur XF25</button>
                                        <button id=val class=bouton_choix name="subject" type="submit" value="XF126">Capteur XF126</button>
                                    </div>
                                </div>
                                <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/Lumière_éteinte.png" alt="icone d'une ampoule"  >
                                    <div class="selecteur-content">
                                        <button id=val class=bouton_choix name="subject" type="submit" value="LX715">Capteur LX715</button>
                                        <button id=val class=bouton_choix name="subject" type="submit" value="LX256">Capteur LX256</button>
                                        <button id=val class=bouton_choix name="subject" type="submit" value="LX758">Capteur LX758</button>
                                        <button id=val class=bouton_choix name="subject" type="submit" value="LX512">Capteur LX512</button>
                                        <button id=val class=bouton_choix name="subject" type="submit" value="LXX23">Capteur LXX23</button>
                                    </div>
                                </div>
                                <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/Humidité.png" alt="icone d'une goutte"  >
                                    <div class="selecteur-content">
                                        <button id=val class=bouton_choix name="subject" type="submit" value="HM25">Capteur HM25</button>
                                        <button id=val class=bouton_choix name="subject" type="submit" value="HM74">Capteur HM74</button>
                                        <button id=val class=bouton_choix name="subject" type="submit" value="HMX226">Capteur HMX226</button>
                                    </div>
                                </div>
                                <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/Présence.png" alt="icone d'un voleur"  >
                                    <div class="selecteur-content">
                                        <button id=val class=bouton_choix name="subject" type="submit" value="PR12">Capteur PR12</button>
                                        <button id=val class=bouton_choix name="subject" type="submit" value="PR036">Capteur PR036</button>
                                        <button id=val class=bouton_choix name="subject" type="submit" value="PR786">Capteur PR786</button>
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
                                <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/Store.png" alt="icone d'un Store"  >
                                    <div class="selecteur-content">
                                        <button id=val class=bouton_choix name="subject" type="submit" value="STR52">Capteur STR52</button>
                                        <button id=val class=bouton_choix name="subject" type="submit" value="STR8">Capteur STR8</button>
                                        <button id=val class=bouton_choix name="subject" type="submit" value="STR96">Capteur STR96</button>
                                    </div>
                                </div>
                                <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/plus.png" alt="icone d'un plus"  >
                                    <div class="selecteur-content">
                                        <button id=val class=bouton_choix name="subject" type="submit" value="FNT223">Capteur FNT223</button>
                                        <button id=val class=bouton_choix name="subject" type="submit" value="FNT45">Capteur FNT45</button>
                                        <button id=val class=bouton_choix name="subject" type="submit" value="FNT76">Capteur FNT76</button>
                                    </div>
                                </div>
                                <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/plus.png" alt="icone d'un plus"  >
                                    <div class="selecteur-content">
                                        <button id=val class=bouton_choix name="subject" type="submit" value="XX78">Capteur XX78</button>
                                        <button id=val class=bouton_choix name="subject" type="submit" value="XX7">Capteur XX7</button>
                                    </div>
                                </div>
                                <div class="selecteur"><img class="icone_capteur" src="../Vue/image/capteurs/plus.png" alt="icone d'un plus"  >
                                    <div class="selecteur-content">
                                        <button id=val class=bouton_choix name="subject" type="submit" value="Y85">Capteur Y85</button>
                                        <button id=val class=bouton_choix name="subject" type="submit" value="Y41">Capteur Y41</button>
                                    </div>
                                </div>

                            </div>


    


    </form>

		 </ul>
            </section>
            <footer>
                <?php include "footer.php"?>
            </footer>
        </div>
	 </body>
</html>