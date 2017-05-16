<?php

$line=trim(fgets(STDIN));
$x=explode(" ", $line);

$x[0]=$x[0]*$x[0]*$x[0];
$x[1]=$x[1]*$x[1]*$x[1];

$y=$x[0]-$x[1];

echo $y;


?>
