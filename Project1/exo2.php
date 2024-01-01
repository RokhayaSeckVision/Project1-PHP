

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Multiple de 3 et de 5 </title>
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
        <h3>Rentrer le nombre à tester: </h3><br>
        <input type="text" name='number'><br>
        <button type="submit">Tester</button><br>
    </form>

<?php
if(isset($_POST["number"])){
$nombre= $_POST["number"];
if($nombre % 3 ==0 && $nombre % 5 == 0 ){
    echo "$nombre est un multiple de 3 et de 5";
}
else{
    echo "$nombre n'est pas multiple de 3 et de 5";
}}
?>
    
</body>
</html>