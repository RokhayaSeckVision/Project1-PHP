<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle</title>
</head>
<body>
<?php

for($i= 1;$i<11;$i++){
    echo "&nbsp;&nbsp;";
    for($j= 1; $j<11 ;$j++){
        if($i>=$j){
        echo $i;      
    }}
    echo "<br />";
}
?> 
</body>
</html>