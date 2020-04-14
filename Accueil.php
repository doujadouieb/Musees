<html>
<head>

<title>Musées</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
<link rel="file:///C:/MAMP/htdocs/Musees/Accueil.php" />
<link rel="file:///C:/MAMP/htdocs/Musees/muse.php" />
<link rel="file:///C:/MAMP/htdocs/Musees/decouvrez-nous.php" />

</head>
<body>

  
<?php

	
$connect = mysqli_connect('localhost','root','')or die('error');
		    mysqli_select_db($connect,'projet-museefr');
	
?>


<div id ="banner1">
<p>MUSEE DE FRANCE</p>
</div>

<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>

<div>

<ul>
<center>
<li><a href="Accueil.php">Accueil</a></li>
<li><a href="muse.php">Nos Musées</a></li>
<li><a href="decouvrez-nous.php">Découvrez-Nous </a></li>
<li><a href="../musees/login/login.php">Se déconnecter </a></li>
</center>
</ul>

</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  
 <div>
 <h1><center>Découvrez nos musées selon la région où vous allez !</center></h1></div>
 
<br>
<div id="text">
 <h4><center> Un musée est une institution permanente sans but lucratif au service de la société et de son développement ouverte au public, qui acquiert,
 conserve, étudie, expose et transmet le patrimoine matériel et immatériel de l’humanité et de son environnement à des fins d'études, d'éducation et de délectation. 
</center></h4></div>
<br>
<br>

<hr>
<br>
<br>
<br>

<div id="img">
<center>
<table>
<tr>
<td><a><img SRC="image/louvre1.jpg" ></a><center><p>Musée de Louvre</p></center></td>
<td><a><img SRC="image/cité-science.jpg" ></a><center><p>Cité des sciences</p><center></td>
<td><a><img SRC="image/orsay.jpg" ></a><center><p>Musée d'Orsay</p></center></td>

</tr>
</table>
</center>
</div>

<br>
<br>
<br>
<br>
<br>  
<hr><br>
<br>
<br><center>
<div><h3>Les musées sont souvent spécialisés, il en existe principalement neuf grandes catégories :</h3><br><br>
<p>les musées d'archéologie || les musées d'art || les Musée des Beaux-Arts || les musées des arts décoratifs || les musées d'histoire || les musées de sciences || musées d'histoire naturelle || les musées des techniques |
les musées d'ethnologie. 

</p></center>
<br>
<br>
<br>
<br>


<footer>
<center>
<p><b>MUSEE DE FRANCE</b></p>
<a href="decouvrez-nous.php">Contactez-nous</a>
<p><a href="Accueil.php" >Retour </a></p>
</center>
</footer>

 
</body>
</html>