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

foreach ($tableau1 as $key => $values) {
    echo '<p>Le nom '.$key.' a pour prenom, ville de naissaince et Age: ';
    echo'<br>';
    foreach($values as $value){
       echo $value.' ';
    }
    echo '<p>';
}  

foreach ($tableau2 as $key => $values) {
    echo '<p>Le nom '.$key.' a pour prenom, ville de naissaince, Lieu de residence et Age: ';
    echo'<br>';
    foreach($values as $value){
       echo $value.' ';
    }
    echo '<p>';
}
?>
</body>
</html>