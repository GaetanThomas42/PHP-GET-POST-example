<?php

include("../parts/header.php");

?>
<div class="m-5">


<div class="d-flex align-items-center">
<div class="col-5">
<p>Ce formulaire possède les attributs</p>
<p>
< form method="POST" action="index.php" >
</p> 
<p>
La méthode POST transmets les données dans le body de la Reponse
</p>
</div>
<img src="request.png" class="img-fluid col-4">
</div>

<form method="POST" action="index.php">
    <label>Titre</label>
    <input name="titre" type="text
    ">
    <label>Contenu</label>
    <input name="contenu" type="text">
    <input type="submit" value="Valider">
    <p class="m-5">
  Ce formulaire renverra donc à la page index.php ou il sera possible de récuperer les données avec la variable globale $_POST 
    </p>
    <p class="m-5">
Il est possible de passer des données suplémentaires avec un < input type="hidden  name="myData" value="myValue">    </p>
    <input name="hiddenData" type="hidden" value="Secret technique">
    
</form>