<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diviseurs d'un entier</title>
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
        <h3>Entrer l'entier dont vous voulais les diviseurs: </h3><br>
        <input type="text" name='nombre'><br>
        <button type="submit">calculer</button><br>
</form>

<?php
if(isset($_POST["nombre"])){
$nombre = $_POST["nombre"]; 
for($i=1; $i<=($nombre/2); $i++){
    if($nombre % $i == 0){
        echo "La liste des diviseurs de $nombres est de: $i.<br>";
    }
}}
?>

</body>
</html>