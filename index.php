<?php

include("../parts/header.php");

?>

<div class="my-3 d-flex justify-content-evenly">
<a class="btn btn-primary"href="http://localhost/dwwm-pe5-php/TRANSMISSION/postForm.php">POST</a>
<a class="btn btn-primary"href="http://localhost/dwwm-pe5-php/TRANSMISSION/getForm.php">GET</a>
<a class="btn btn-primary"href="http://localhost/dwwm-pe5-php/TRANSMISSION/cookies.php">COOKIES</a>

</div>

<p class="m-5">
Un formulaire est valider grace aux < button>< /button> ou < input type="submit">
</p>
<p class="m-5">
Lorsqu'il est valider, il transmets les données contenus dans les inputs 
</p>
<p class="m-5">
Les données seront transmise dans la page renseigné dans l'attribut action ex : < form action="index.php" >
</p>
<p class="m-5">
La méthode de transmission sera renseigné dans l'attibut method  ex : < form action="index.php" method="POST">
</p>
<p class="m-5">
  Chaque input aura donc besoin d'un NAME et d'une VALUE pour que la transmission fonctionne correctement
</p>
<h3 class="text-center">Récupérations des données</h3>
<p class="m-5">Données récupérées en POST ( via formulaire )
<?php 
var_dump($_POST);
?>
</p>
<p class="m-5">Données récupérées en GET ( formulaire, ou en modifiant l'url de cette page )
<?php 
var_dump($_GET);
?>
<p class="m-5">Testez avec : http://localhost/dwwm-pe5-php/TRANSMISSION/index.php?myData=Bonjour

</p>
<p class="m-5">Données récupérées en COOKIE
<?php 
var_dump($_COOKIE);
?>
</p>
<p class="m-5">Données récupérées en SESSION  EXEMPLE dans connect.php
<?php 
var_dump($_SESSION);
?>
</p>
<p class="m-5">Pour stocker des données en seesion il faut que la Session soit lancée avec 
$_SESSION["username"] = $_POST["username"];
</p>
<p class="m-5">session_start();
</p>
<p class="m-5">Vous pourrez stocker des données de la maière suivante 
$_SESSION["username"] = $_POST["username"];
</p>
<p class="m-5">Les données seront stockées dans le Serveur uniquement accèssible par le navigateur possédant le bon COOKIE PHPSESSIONID
</p>
<p class="m-5">
Il est donc possible de stocker des données sensibles</p>