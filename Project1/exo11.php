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
echo "Un problem de Syntax que je n'ai pas pu resoudre.";
$tableau1 =[
    "Aida"=>["Fall","Dakar","20"],
    "Fatma"=>["Sarr","Dakar","24"],
    "Sokhna"=>["Sow","Dakar","15"],
];
$tableau2 =[
    "Modou"=>["prenom"=>"Fall","Ville"=> "Dakar","Résidence"=> "Fann","Age"=>"20"],
    "Fatou"=>["prenom"=>"Sarr","Ville"=> "Dakar","Résidence"=> "Mermoz", "Age"=>"24"],
    "Penda"=>["prenom"=>"Sow","Ville"=> "Dakar","Résidence"=> "Liberté","Age"=>"15"],
];


$i=0;
while(isset($tableau1[$i]) )
{
    echo "L'élément $i est $tableau1[$i] <br />";
$i++;
}

$j=0;
while(isset($tableau2[$j]) )
{
    echo "L'élément $j est $tableau2[$j] <br />";
$j++;
}

?>
</body>
</html>