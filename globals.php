<!DOCTYPE html>
<html>
<body>

<?php

$x=8;
$y=6;

function addition(){
	$GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];

}

addition();
echo $z;
?>
</body>
</html>