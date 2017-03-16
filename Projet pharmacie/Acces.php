
<!DOCTYPE html>
<html><head >
       <title>Accès</title>
              <meta charset="UTF-8"/>
              
    </head>
    <body>
<h1><img src="Images\pharmacie-garde.png" alt="logo_pharmacie" width="45" height="45"/>&nbsp&nbsp&nbsp Accès &nbsp&nbsp&nbsp<img src="Images\pharmacie-garde.png" alt="logo_pharmacie" width="45" height="45"/></h1>

<?php include("menu.php");?>

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

<div class="croix1"><img src="Images\40626.gif"/></div>
<div class="croix2"><img src="Images\40626.gif"/></div>

<div class="coordonnées">
<p>18 bis rue du Maréchal Joffres 37100 tours</p>
<p>Zone commerciale de l'Horloge</p>
<p><img src="Images\arobase01.jpg" alt="@" width="25" height="27"/><a href="mailto:pharmacie.jego@wanadoo.fr">pharmacie.jego@wanadoo.fr</a></p>
<p><img src="Images\c9dbb-logo_telephone.png" alt="Tel" width="30" height="30"/> Tel : 02.47.86.03.33</p>
<p><img src="Images\fax-icon-png-11.png" alt="Tel" width="30" height="30"/> Fax : 02.47.86.03.33</p>
</div>



    </body>
    </html>