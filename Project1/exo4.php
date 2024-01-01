


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPCM</title>
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
        <h3>Entrer deux nombre dont vous voulez le PPCM: </h3><br>
        <input type="text" name='number1' placeholder="numero 1" ><br>
        <input type="text" name='number2' placeholder="numero 2" ><br>
        <button type="submit">Trouver</button><br>
    </form>

<?php
if ( isset($_POST["number1"] )|| isset($_POST["number2"])){
    $x = (int)$_POST['number1'] ; 
    $y = (int)$_POST['number2'] ; 
    $res = $x * $y;
    while($x > 1){
        $r = $x % $y;
    if($r == 0 ){
        $result = $res / $y;
        break;  // sorti quand résultat trouvé
                }
        $x = $y;
        $y = $r;
    }
        echo "le ppcm de $x et $y est de $result"; 
}
?>
</body>
</html>
