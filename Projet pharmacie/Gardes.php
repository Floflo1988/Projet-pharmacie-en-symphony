
<!DOCTYPE html>
<html>
<head >
       <title>Gardes</title>
              <meta charset="UTF-8"/>
              <link rel="stylesheet" type="text/css" href="../Projet pharmacie/Gardes.css"/>
              <script type="text/javascript"></script>

    </head>
    <body>
<h1><img src="Images\pharmacie-garde.png" alt="logo_pharmacie" width="45" height="45"/>&nbsp&nbsp&nbsp Gardes &nbsp&nbsp&nbsp<img src="Images\pharmacie-garde.png" alt="logo_pharmacie" width="45" height="45"/></h1>

<?php include("menu.php");?>

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