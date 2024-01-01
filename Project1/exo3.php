<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    body{
        background-color: blanchedalmond;
        margin:50px 0px; padding:0px;
        text-align:center;
        align:center;
      }
    </style>
</head>

<body>

<h1>324 est le nombre choisi,</h1>
<p>Nombre de Tirage necessaire: </p>

    <h3>Avec While </h3><br> 
<?php

$nb=324;//324 est le nombre choisie
//nombre touver 
$nbfinal=0;
//compteur
$tirage=1;
//boucle de tirage
while($nbfinal!=$nb)
{
  $nbfinal=rand(1,1000);
  $tirage++;
}
echo "$nb trouvé après $tirage coups ";
?>
<br>

    <h3>Avec For</h3><br>
<?php
//Nombre à trouver
$nb=324;
//boucle de tirage
for($tirage=1;$nbfinal!=$nb;$tirage++)
{
$nbfinal=rand(0,1000);
//echo $x,"<br />";//pour afficher tous les tirages
}
echo "$nb trouvé en $tirage coups ";
?>

</body>
</html>
