<?php

include("../parts/header.php");

if(isset($_GET["key"]) && isset($_GET["value"])){
    setcookie($_GET["key"], $_GET["value"], time() + 50);
    header("Location: index.php");
}
?>
<div class="m-5">
<p >
<p>Ce formulaire exécute la fonction :
</p>
<p>
setcookie( LaCléDuCookie, SaValeur, SaDuréeDeVie);</p> 

</p>
<p>
Notre exemple stocke un cookie avec les données GET avec 50sec de durée de vie 
</p> 
<p>
setcookie($_GET["key"], $_GET["value"], time() + 50);
</p> 
</p>
</div>
<form method="GET">
    <label>Clé</label>
    <input required name="key" type="text">
    <label>Valeur</label>
    <input required name="value" type="text">
    <input value="Valider" type="submit">
    
</form>

<div class="d-flex align-items-center">
<div class="col-5">
<p > 
Les cookies sont stockés dans le navigateur
</p>
</div>
<img src="cookies.png" class="img-fluid col-4">
</div>
