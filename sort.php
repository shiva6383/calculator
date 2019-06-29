<!DOCTYPE html>
<html>
<body>

<?php
$name = array("gayle","pollard","russell");
sort($name);

  $nlength = count($name);
  for($x=0;$x<$nlength;$x++){
        

        echo $name[$x];
        echo "<br>";
    }
        ?>
        </body>
        </html>