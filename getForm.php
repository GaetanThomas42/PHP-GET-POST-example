<?php

include("../parts/header.php");

?>
<div class="m-5">
<p>Ce formulaire possède les attributs</p>
<p>
< form method="GET" action="index.php" >
</p> 

<p>
La méthode GET transmets les données via URL, qui est contenu dans le HEADER de la requete au serveur
</p>
<p>
avec la syntaxe ? pour renseigner la méthode GET et & pour séparer les données
</p>
<p>
  EXEMPLE : monUrl.php?inputName1=inputValue1&inputName2=inputValue2
</p>
<p>
  Chaque input aura donc besoin d'un NAME et d'une VALUE pour que la transmission fonctionne correctement
</p>

<form method="GET" action="index.php">
    <label>Titre</label>
    <input name="titre" type="text">
    <label>Contenu</label>
    <input name="contenu" type="text">
    <p>
    Ce formulaire renverra donc à la page index.php ou il sera possible de récuperer les données avec la variable globale $_GET 
    </p>
    <p>
    index.php?titre=value&contenu=value <span class="text-danger">( LES DONNÉES seront stockées en STRING attention aux types)
</span></p>
    <input value="Valider" type="submit">
</form>

</div>