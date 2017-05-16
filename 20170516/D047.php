<?php

$myarray = array();
for($i=0; $i<4; $i++){
  $l = trim(fgets(STDIN));
  $myarray[$i] = $l;
}



echo "Gold ".$myarray[0]."\n";
echo "Silver ".$myarray[1]."\n";
echo "Bronze ".$myarray[2]."\n";
?>
