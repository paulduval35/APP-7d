<!DOCTYPE html>

<html lang="en">
<head>
    <title>DHOMS</title>
	<link rel="stylesheet" href="styleinscription.css">
	
</head>

<body>
<?php require "nav.php";?>
<link rel="stylesheet" href="style.css">

<h1><a href="index.html"><img src="image/accueil/accueil.png" alt="accueil"></a></h1>
<h1>DHOMS ACCUEIL</h1>

<h2>Bienvenue</h2>

<form action="somescript.php" method="post">

<p>e-mail:</p>
<p><input type="text" value="email"></p>
<p>mot de passe</p>

<p><input password="password" value="ton mot de passe"></p>


<p>tu es:</p>
<p><input type="radio" name="areyou" value="user"> utilisateur</p>
<p><input type="radio" name="areyou" value="admin"> administrateur</p>


<p><input type="submit"></p>



</form>


</body>

</html>