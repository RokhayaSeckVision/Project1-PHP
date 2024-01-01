<?php
var_dump($_POST);
echo "<table border=\"1\" >";
foreach($_POST as $cle=>$val)
{
echo "<tr> <td> $cle : &nbsp;</td> <td>".stripslashes($val)."</td></tr>";
}
echo "</table>";
   