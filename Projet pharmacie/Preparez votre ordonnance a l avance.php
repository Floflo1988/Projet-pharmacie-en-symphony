<!DOCTYPE html>
<html lang="fr">
<head>
 <title>Ordonnaces</title>
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
      <h2><img src="Images\pharmacie-garde.png" alt="logo_pharmacie" width="45" height="45"/>&nbsp&nbsp&nbsp Commandez votre ordonnance pour gagner du temps &nbsp&nbsp&nbsp<img src="Images\pharmacie-garde.png" alt="logo_pharmacie" width="45" height="45"/></h2>
      <br/>
      Votre profil: <button type="button" class="btn btn-info">
      <span class="glyphicon glyphicon-user"/>
    </button>
    Votre panier d'achats: <button type="button" class="btn btn-info">
    <span class="glyphicon glyphicon-shopping-cart"/>
  </button>

</div>
</div>

<div class="ordonnance">
<p></br></br></br>Afin de vous permettre de venir récupérer vos médicaments il vous suffit de scanner votre ordonnance et de cliquez sur l'image ci-dessous et de nous l'envoyer par mail en précisant votre numéro de téléphone ainsi tous sera prêt pour votre arrivée.</p>
<p></br>Si des produits sont indisponibles nous vous recontactons immédiatement pour vous tenir informer de la date de disponibilité.</p>
<p>(24h après commande)</p>
<p></br>!!! N'oubliez pas de présenter l'originale de votre ordonnance, votre carte vital ainsi que votre carte de mutuelle lors de votre venue.</p>
<p></br>Vous avez également la possibilité de nous envoyer votre ordonnace par Fax au 02 47 86 04 17</p>
<p>Nous serons ravis de vous conseiller si vous avez des interrogations</p>
</div>

<br/><br/>

<div class="Acceuil">
<a href="mailto:pharmacie.jego@hotmail.com"><img class ="Acceuil" src="Images\ord-électronique.png" alt="pharmacie"/></a>
</div>



<?php include("FootPage.php");?>
</body>
</html>