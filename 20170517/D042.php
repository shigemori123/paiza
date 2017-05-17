<?php
$myarray = array();
for($i=0; $i<2; $i++){
  $l = trim(fgets(STDIN));
  $myarray[$i] = $l;
  $a[$i]=explode(" ", $myarray[$i]);
}

$x=$a[0][0]*$a[1][1];
$y=$a[1][0]*$a[0][1];

$z=$x-$y;
echo $z;
?>
