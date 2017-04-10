<!DOCTYPE html>
<html lang="fr">
<head>
 <title>Vacances</title>
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
      <h2><img src="Images\pharmacie-garde.png" alt="logo_pharmacie" width="45" height="45"/>&nbsp&nbsp&nbsp Partez en vacances l'esprit léger &nbsp&nbsp&nbsp<img src="Images\pharmacie-garde.png" alt="logo_pharmacie" width="45" height="45"/></h2>
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
  <div class="container">
          <p>Cliquez sur le produit pour consulter sa description</p>
          <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1"><img src="Images\Vacances-votre-pharmacie-homeo-de-l-ete_exact441x300.jpg" width="150" height="100"/> <h2>été 1</h2> prix unitaire : 15,00€ TTC</button>

          <!-- Modal -->
          <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"> été 1 </h4>
                </div>
                <div class="modal-body">
                  <div class="media-left media-top">
                    <img src="Images\Vacances-votre-pharmacie-homeo-de-l-ete_exact441x300.jpg" width="150" height="100"/>
                  </div>
                  <div class="media-body">
                    <p>Nam sole orto magnitudine angusti gurgitis sed profundi a transitu arcebantur et dum piscatorios quaerunt lenunculos vel innare temere contextis cratibus parant, effusae legiones, quae hiemabant tunc apud Siden, isdem impetu occurrere veloci. et signis prope ripam locatis ad manus comminus conserendas denseta scutorum conpage semet scientissime praestruebant, ausos quoque aliquos fiducia nandi vel cavatis arborum truncis amnem permeare latenter facillime trucidarunt.</p>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <h4>Quantité:</h4>
          <SELECT name="quantity">
            <OPTION selected = "selected">1</OPTION>
            <OPTION>2</OPTION>
            <OPTION>3</OPTION>
            <OPTION>4</OPTION>
            <OPTION>5</OPTION>
          </SELECT>
          <input type="submit" value="Commander" /></br>
        </div>
      
      <br/><br/>
        <div class="container">
          <p>Cliquez sur le produit pour consulter sa description</p>
          <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2"><img src="Images\Vacances-votre-pharmacie-homeo-de-l-ete_exact441x300.jpg" width="150" height="100"/> <h2>été 2</h2> prix unitaire : 10,00€ TTC</button>

          <!-- Modal -->
          <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"> été 2 </h4>
                </div>
                <div class="modal-body">
                  <div class="media-left media-top">
                    <img src="Images\Vacances-votre-pharmacie-homeo-de-l-ete_exact441x300.jpg" width="150" height="100"/>
                  </div>
                  <div class="media-body">
                    <p>Nam sole orto magnitudine angusti gurgitis sed profundi a transitu arcebantur et dum piscatorios quaerunt lenunculos vel innare temere contextis cratibus parant, effusae legiones, quae hiemabant tunc apud Siden, isdem impetu occurrere veloci. et signis prope ripam locatis ad manus comminus conserendas denseta scutorum conpage semet scientissime praestruebant, ausos quoque aliquos fiducia nandi vel cavatis arborum truncis amnem permeare latenter facillime trucidarunt.</p>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <h4>Quantité:</h4>
          <SELECT name="quantity">
            <OPTION selected = "selected">1</OPTION>
            <OPTION>2</OPTION>
            <OPTION>3</OPTION>
            <OPTION>4</OPTION>
            <OPTION>5</OPTION>
          </SELECT>
          <input type="submit" value="Commander" /></br>
        </div>
    </div>
  </div>
</div>



<?php include("FootPage.php");?>
</body>
</html>