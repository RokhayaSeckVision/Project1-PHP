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
<?php
$tableau =[
    "Aida"=>["Fall","Dakar","20"],
    "Fatma"=>["Sarr","Dakar","24"],
    "Sokhna"=>["Sow","Dakar","15"],
];
?>
<h3>var_dump($tableau["Aida"])</h3>
<?php
var_dump($tableau["Aida"]);
?>
<br><br>
<h3>var_dump($tableau["Fatma"])</h3>

<?php
var_dump($tableau["Fatma"]);
?>
<br><br>
<h3>var_dump($tableau["Sokhna"])</h3>

<?php
var_dump($tableau["Sokhna"]);
?>
</body>
</html>