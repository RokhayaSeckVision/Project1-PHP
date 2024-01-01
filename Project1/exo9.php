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
    "Modou"=>["prenom"=>"Fall","Ville"=> "Dakar","Résidence"=> "Fann","Age"=>"20"],
    "Fatou"=>["prenom"=>"Sarr","Ville"=> "Dakar","Résidence"=> "Mermoz", "Age"=>"24"],
    "Penda"=>["prenom"=>"Sow","Ville"=> "Dakar","Résidence"=> "Liberté","Age"=>"15"],
];

?>
<h3>var_dump($tableau["Modou"])</h3>
<?php
var_dump($tableau["Modou"]);
?>
<br><br>
<h3>var_dump($tableau["Fatou"])</h3>

<?php
var_dump($tableau["Fatou"]);
?>
<br><br>
<h3>var_dump($tableau["Penda"])</h3>

<?php
var_dump($tableau["Penda"]);
?>
</body>
</html>