<?php

$myarray = array();
for($i=0; $i<2; $i++){
  $l = trim(fgets(STDIN));
  $myarray[$i] = $l;
  $a[$i]=explode(" ", $myarray[$i]);
}
$b=$a[0][0]-1;

echo $a[1][$b];


?>
