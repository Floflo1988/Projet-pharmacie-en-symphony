<!DOCTYPE html>
<html lang="fr">
<head>
   <title>Accès</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="Acces.css"/>

</head>
<body>     

<?php include("menu.php");?>

  <div class="container">
    <div class="jumbotron">     
      <h2><img src="Images\pharmacie-garde.png" alt="logo_pharmacie" width="45" height="45"/>&nbsp&nbsp&nbsp Nous trouver &nbsp&nbsp&nbsp<img src="Images\pharmacie-garde.png" alt="logo_pharmacie" width="45" height="45"/></h2>
      <br/>
      Votre profil: <button type="button" class="btn btn-info">
      <span class="glyphicon glyphicon-user"/>
  </button>
  Votre panier d'achats: <button type="button" class="btn btn-info">
  <span class="glyphicon glyphicon-shopping-cart"/>
</button>

</div>
</div>


<div class="map"><a href="https://fr.mappy.com/#/6/M2/TSearch/S18+bis+rue+du+mar%C3%A9chal+joffres+37100+tours/N151.12061,6.11309,0.70267,47.42177/Z15/
" target="_blank"><img src="Images\mi_ima_b1bd4c30b2.png" width="150" height="150"></a></div>

<div class="info">
<p><br/><br/><br/>Accès en Bus N°: 2, 53 et 56 // Arrêt Luxembourg + 10 minutes de marche<br/></p>
<p>Accès en Tramway ligne A // Arrêt Luxembourg + 10 minutes de marche</p>
<p>Coordonnées GPS: N 47° 25' 20.54'' // E 00° 42' 7.263''</p><br/>

<span id="elementClignotant">170 places de parking et places handicapés</span>
<script type="text/javascript">
function textClignotant()
{
    var element = document.getElementById('elementClignotant');
    var random = Math.round(Math.random()*2);
     
    switch (random)
    {
        case 0:
        element.style.color = "black";
        break;
         
        case 1:
        element.style.color = "yellow";
        break;

    }
}
 
window.onload = function(){ setInterval(textClignotant, 300); };
</script>

</div>


<div class="centrale"><a href="https://fr.mappy.com/#/6/M2/TSearch/S18+bis+rue+du+mar%C3%A9chal+joffres+37100+tours/N151.12061,6.11309,0.70267,47.42177/Z15/
" target="_blank"><img class="map" src="Images\espace horloge.bmp" alt="espace horloge" width="850" height="500" /></a></div>

 <?php include("FootPage.php");?>



    </body>
    </html>