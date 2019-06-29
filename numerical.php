<!DOCTYPE html>
<html>
<body>

<?php

$no = array( 7,3,9,2,4,0,8);

   rsort($no);


 $nlength=count($no);
   for($x=0;$x<$nlength;$x++){


            echo $no[$x];
            echo "<br>";
}
?>
</body>
</html>