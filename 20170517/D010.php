<?php
$myarray = array();
for($i=0; $i<=2; $i++){
  $l = trim(fgets(STDIN));
  $myarray[$i] = $l;
}

echo $myarray[0]."@".$myarray[1];

?>
