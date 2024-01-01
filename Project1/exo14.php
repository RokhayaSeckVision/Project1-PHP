<?php
if (isset($_POST["choix"])) {
switch($_POST["choix"])
{
case "Vendre":
header("location:vente.html");
break;
case "Acheter":
header("location:achat.html");
break;
case "Louer":
header("location:location.html");
break;
}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Option Vente, Achat et Location </title>
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
<form  method="post" >
<fieldset>
<legend><b>Cliquer sur l'option que vous voulez </b></legend>
<table>
<tr>
<td><input type="submit" name="choix" value="Vendre" href="https://www.google.com/search?q=vente&client=firefox-b-d&sca_esv=594806322&hl=fr&biw=613&bih=774&tbm=vid&ei=2PuRZaW9Ju2lkdUP4sqs6Ag&ved=0ahUKEwilifnI7LqDAxXtUqQEHWIlC40Q4dUDCA4&uact=5&oq=vente&gs_lp=Eg1nd3Mtd2l6LXZpZGVvIgV2ZW50ZTIFEAAYgAQyBRAAGIAESNEfUIQRWPUccAB4AJABAJgBwwOgAYoMqgEJMC4zLjEuMC4yuAEDyAEA-AEBwgIKEAAYgAQYigUYQ4gGAQ&sclient=gws-wiz-video" /></td>
<td><input type="submit" name="choix" value="Acheter" href=""/></td>
<td><input type="submit" name="choix" value="Louer" href=""/></td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>