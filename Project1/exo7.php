<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre parfait</title>
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
    
<form method="POST">
        <h3>Entrer l'entier que vous voulais tester: </h3><br>
        <input type="text" name='nombre'><br>
        <button type="submit">calculer</button><br>
</form>

<?php

if(isset($_POST["nombre"])) {
$nombre = (int)$_POST["nombre"]; 
$compt=0;
for($i=1; $i<=($nombre/2);$i++){
    if($nombre % $i == 0){
        $compt +=$i;
    }}
if($compt==$nombre){
    echo " $nombre est parfait";
} 
    echo "$nombre n'est pas parfait ";  
}
?>
</body>
</html>