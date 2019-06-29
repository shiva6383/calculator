<!DOCTYPE html>
<html>
<body>

<?php

$name = array("gayle"=>"77","hetmyre"=>"66","lewis"=>"86");
krsort($name);

 foreach($name as $x=>$_value){
   echo "ipl=".$x.",value=".$x_value;
   echo "<br>";

 }
 ?>
 </body>
 </html>