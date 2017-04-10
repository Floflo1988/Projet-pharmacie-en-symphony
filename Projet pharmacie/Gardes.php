<!DOCTYPE html>
<html lang="fr">
<head>
 <title>Gardes</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="Garde.css"/>

</head>
<body>     

<?php include("menu.php");?>

  <div class="container">
    <div class="jumbotron">     
      <h2><img src="Images\pharmacie-garde.png" alt="logo_pharmacie" width="45" height="45"/>&nbsp&nbsp&nbsp Qui est de gardes ? &nbsp&nbsp&nbsp<img src="Images\pharmacie-garde.png" alt="logo_pharmacie" width="45" height="45"/></h2>
      <br/>
      Votre profil: <button type="button" class="btn btn-info">
      <span class="glyphicon glyphicon-user"/>
    </button>
    Votre panier d'achats: <button type="button" class="btn btn-info">
    <span class="glyphicon glyphicon-shopping-cart"/>
  </button>

</div>
</div>



<div class="text">
<p>Où trouver une pharmacie de garde ce soir ou ce week end?</p>
<p>Il vous suffit de cliquer sur la flêche ci-dessous pour accéder à RésoGardes</p>
<p>et de renseigner votre code postal</p>
</br>
<p><a href="http://www.3237.fr/" target="_blank"><img src="Images/next_256.png" width="50" height="45"/ ><a href="http://www.3237.fr/" target="_blank">RésoGardes</a></p>
</div>
</br></br>

<div class="cal">
<p>Aujourd'hui le : <?php
echo date('d/m/y');
?></p>

</div>


<?php include("FootPage.php");?>



    </body>
    </html>