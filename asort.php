<!DOCTYPE html>
<html>
<body>

<?php

$runs = array ("gayle"=>"179","rusell"=>"111","pollard"=>"100");
 asort($runs);

 foreach($runs as $x=>$x_value){
        echo "windies=".$x.",value=".$x_value;
        echo"<br>";
       }

 ?>
 </body>
 </html>
