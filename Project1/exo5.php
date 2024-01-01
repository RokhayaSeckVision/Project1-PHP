<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimension du cercle</title>
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
        <h3>Donner le rayon du cercle: </h3><br>
        <input type="text" name='rayon'><br>
        <button type="submit">calculer</button><br>
    </form>
    <br><br><br>
    <h3>Les dimensions du cerle sont pour:</h3>
<?php
if (isset($_POST["rayon"])) {
    $rayon = $_POST['rayon'];
    $diametre= $rayon*2;
    echo "le diametre est de $diametre.</br>";
    $perimetre= $diametre * 3.14;
    echo "Le perimetre est de $perimetre.</br>";
    echo '';
    $surface = $rayon * $rayon * 3.14;
    echo "La surface est de $surface";
}
?>
</body>
</html>