
<!DOCTYPE html>
<html >
<head >
       <title>Horaires</title>
              <meta charset="UTF-8"/>
              <link rel="stylesheet" type="text/css" href="../Projet pharmacie/Horaires.css"/>

                 </head>
    <body>
<h1><img src="Images\pharmacie-garde.png" alt="logo_pharmacie" width="45" height="45"/>&nbsp&nbsp&nbsp Horaires &nbsp&nbsp&nbsp<img src="Images\pharmacie-garde.png" alt="logo_pharmacie" width="45" height="45"/></h1>

<?php include("menu.php");?>

<div class="text">
<p>Nous avons le plaisir de vous acceuillir :</p>
<p>  De 14h30 à 19h00 le lundi</p>
<p>  et de 09h à 12h30 et de 14h30 à 19h00 du Mardi au Samedi</p>
</div>

<div class="Horloge">
<style>
#horloge{
    height: 400px;
    margin: 40px auto;
    position: relative;
    width: 400px;
    border: 10px solid #3A5486;
    border-radius: 50%;
    background: url("Images/82e81fdd-ea25-4d56-adaa-c0d174d8e3bf-1200.png") no-repeat scroll center 25% #FFFFFF;background-size: 400px;
    box-shadow: 0 0 40px #8080A0, 0 0 50px 10px #CCCCCC inset;
}
#horloge:before{
    border-radius: 50%;
    box-shadow: -2px -2px 5px #000000 inset, -2px 2px 5px #000000 inset, 2px -2px 5px #000000 inset, 2px 2px 5px #000000 inset;
    position: absolute;
    content: '';
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
}
#seconde{
    left: 198px;
    top: 25px;
    height: 180px;
    border: 2px solid rgba( 110,150,180,0.8);
    -webkit-animation: tour 60s steps(60, end) infinite;
    -webkit-transform-origin: 50% 175px;
    -o-animation: tour 60s steps(60, end) infinite;
    -o-transform-origin: 50% 175px;
    animation: tour 60s steps(60, end) infinite;
    transform-origin: 50% 175px;
}
#minute{
    left: 196px;
    top: 55px;
    height: 150px;
    border: 4px solid rgba( 80,150,200,0.8);
    -webkit-animation: tour 3600s steps(60, end) infinite;
    -webkit-transform-origin: 50% 145px;
    -o-animation: tour 3600s steps(60, end) infinite;
    -o-transform-origin: 50% 145px;
    animation: tour 3600s steps(60, end) infinite;
    transform-origin: 50% 145px;
}
#heure{
    left: 194px;
    top: 100px;
    height: 100px;
    border: 6px solid rgba( 10,50,128,0.8);
    -webkit-animation: tour 43200s linear infinite;
    -webkit-transform-origin: 50% 100px;
    -o-animation: tour 43200s linear infinite;
    -o-transform-origin: 50% 100px;
    animation: tour 43200s linear infinite;
    transform-origin: 50% 100px;
}
#centre{
    left: 194px;
    top: 194px;
    border: 6px solid rgba(255,255,255,0.6);
}
.rond, .sep{
    position: absolute;
    border-radius: 50%;
}
.sep{
    height: 10px;
    width: 10px;
    text-align: center;
    line-height: 10px;
    top: 195px;
    left: 195px;
    color: #3A5486;
}
.sep:after{
    content: '•';
}
#h0{
    -webkit-transform: translate(0px, -190px);
    -o-transform: translate(0px, -190px);
    transform: translate(0px, -190px);
}
#h1{
    -webkit-transform: rotate(30deg) translate(0px, -190px);
    -o-transform: rotate(30deg) translate(0px, -190px);
    transform: rotate(30deg) translate(0px, -190px);
}
#h2{
    -webkit-transform: rotate(60deg) translate(0px, -190px);
    -o-transform: rotate(60deg) translate(0px, -190px);
    transform: rotate(60deg) translate(0px, -190px);
}
#h3{
    -webkit-transform: rotate(90deg) translate(0px, -190px);
    -o-transform: rotate(90deg) translate(0px, -190px);
    transform: rotate(90deg) translate(0px, -190px);
}
#h4{
    -webkit-transform: rotate(120deg) translate(0px, -190px);
    -o-transform: rotate(120deg) translate(0px, -190px);
    transform: rotate(120deg) translate(0px, -190px);
}
#h5{
    -webkit-transform: rotate(150deg) translate(0px, -190px);
    -o-transform: rotate(150deg) translate(0px, -190px);
    transform: rotate(150deg) translate(0px, -190px);
}
#h6{
    -webkit-transform: rotate(180deg) translate(0px, -190px);
    -o-transform: rotate(180deg) translate(0px, -190px);
    transform: rotate(180deg) translate(0px, -190px);
}
#h7{
    -webkit-transform: rotate(210deg) translate(0px, -190px);
    -o-transform: rotate(210deg) translate(0px, -190px);
    transform: rotate(210deg) translate(0px, -190px);
}
#h8{
    -webkit-transform: rotate(240deg) translate(0px, -190px);
    -o-transform: rotate(240deg) translate(0px, -190px);
    transform: rotate(240deg) translate(0px, -190px);
}
#h9{
    -webkit-transform: rotate(270deg) translate(0px, -190px);
    -o-transform: rotate(270deg) translate(0px, -190px);
    transform: rotate(270deg) translate(0px, -190px);
}
#h10{
    -webkit-transform: rotate(300deg) translate(0px, -190px);
    -o-transform: rotate(300deg) translate(0px, -190px);
    transform: rotate(300deg) translate(0px, -190px);
}
#h11{
    -webkit-transform: rotate(330deg) translate(0px, -190px);
    -o-transform: rotate(330deg) translate(0px, -190px);
    transform: rotate(330deg) translate(0px, -190px);
}
@-webkit-keyframes tour{
    from{
        -webkit-transform: rotate(0deg);
    }
    to{
        -webkit-transform: rotate(360deg);
    }
}
@-o-keyframes tour{
    from{
        -o-transform: rotate(0deg);
    }
    to{
        -o-transform: rotate(360deg);
    }
}
@keyframes tour{
    from{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    to{
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
</style>
<div id="horloge">
    <div id="heure" class="rond"></div>
    <div id="minute" class="rond"></div>
    <div id="seconde" class="rond"></div>
    <div id="centre" class="rond"></div>
    <div class="sep" id="h0"></div>
    <div class="sep" id="h1"></div>
    <div class="sep" id="h2"></div>
    <div class="sep" id="h3"></div>
    <div class="sep" id="h4"></div>
    <div class="sep" id="h5"></div>
    <div class="sep" id="h6"></div>
    <div class="sep" id="h7"></div>
    <div class="sep" id="h8"></div>
    <div class="sep" id="h9"></div>
    <div class="sep" id="h10"></div>
    <div class="sep" id="h11"></div>
</div>
<script>
var tt = new Date();
document.getElementById('seconde').style.webkitAnimationDelay = -(tt.getSeconds()) + 's';
document.getElementById('minute').style.webkitAnimationDelay = -(tt.getMinutes()*60 + tt.getSeconds()) + 's';
document.getElementById('heure').style.OAnimationDelay = -((tt.getHours()%12)*3600 + tt.getMinutes()*60 + tt.getSeconds()) + 's';
document.getElementById('seconde').style.OAnimationDelay = -(tt.getSeconds()) + 's';
document.getElementById('minute').style.OAnimationDelay = -(tt.getMinutes()*60 + tt.getSeconds()) + 's';
document.getElementById('heure').style.webkitAnimationDelay = -((tt.getHours()%12)*3600 + tt.getMinutes()*60 + tt.getSeconds()) + 's';
document.getElementById('seconde').style.animationDelay = -(tt.getSeconds()) + 's';
document.getElementById('minute').style.animationDelay = -(tt.getMinutes()*60 + tt.getSeconds()) + 's';
document.getElementById('heure').style.animationDelay = -((tt.getHours()%12)*3600 + tt.getMinutes()*60 + tt.getSeconds()) + 's';
</script>

<?php include("FootPage.php");?>

</body>
</html>
