<!DOCTYPE html>
<html lang="fr">
<head>
 <title>Acceuil</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="PharmaciePage1.css"/>

</head>
<body>     

  <?php include("menu.php");?>

  <div class="container">
    <div class="jumbotron">     
      <h2><img src="Images\pharmacie-garde.png" alt="logo_pharmacie" width="45" height="45"/>&nbsp&nbsp&nbsp Bienvenu à la Pharmacie de l'Horloge &nbsp&nbsp&nbsp<img src="Images\pharmacie-garde.png" alt="logo_pharmacie" width="45" height="45"/></h2>
      <br/>
      Votre profil: <button type="button" class="btn btn-info">
      <span class="glyphicon glyphicon-user"/>
    </button>
    Votre panier d'achats: <button type="button" class="btn btn-info">
    <span class="glyphicon glyphicon-shopping-cart"/>
  </button>

</div>
</div>


<div class="Acceuil">
  <img class ="Acceuil" src="Images\Nouvelle image bitmap.bmp" alt="pharmacie"/>
</div>



<?php include("FootPage.php");?>
</body>
</html>