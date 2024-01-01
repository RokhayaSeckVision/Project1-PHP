<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de HT et TVA</title>
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
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<fieldset>
<legend><b>Donner prix HT et le taux TVA </b></legend>
<table border="5" >

<tr>
<td>Prix Hors Taxes : </td>
<td><input type="text" name="HT"/></td>
</tr>

<tr>
<td>Taux de TVA (en %) : </td>
<td><input type="text" name="tva" /></td>
</tr>

<?php
if (isset($_POST['HT']) || isset($_POST['tva'])){
$ht=$_POST['HT'];
$tva=$_POST['tva'];
if(!empty($ht) AND !empty($tva) )
{

echo "<tr><td>Montant de la TVA : </td><td><input type=\"text\"value=\"".round($ht*$tva/100,2)."\"/></td></tr>";
echo "<tr><td>Prix TTC : </td><td><input type=\"text\"value=\"".round($ht*(1+$tva/100),2)."\"/></td></tr>";
}
else
{
echo "<b>Remplir le formulaire</b>";
}}
?>

<tr>
<td><input type="submit" value="ENVOI" /></td>
</tr>

</form>
</body>
</html>