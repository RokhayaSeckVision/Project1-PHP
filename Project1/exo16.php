<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angle en Radian</title>
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
        <h3>Donner l'angle en Radian: </h3><br>
        <input type="text" name='angle'><br>
        <button type="submit">Trouver</button><br>
</form>

<?php

if(isset($_POST["angle"])) {
    $angle= (int)$_POST["angle"]; 
    $sin= sinus($angle);
 echo "Le sinus de $angle donné est de $sinus";

 function sinus($x,$unit)
{
    switch($unit)
    {
    //Radian
    case "1":
    return sin($x);
    break;
    //Degre
    case "2":
    return sin($x/180*PI());
    break;
    //grade
    case "3":
    return sin($x/200*PI());
    break;}
}
echo sinus(PI()/6,R),"<br />";
echo sinus(60,d),"<br />";
echo sinus(100,g),"<br />";
}

?>
</body>
</html>