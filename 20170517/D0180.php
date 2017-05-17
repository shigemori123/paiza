<?php
$myarray = array();
for($i=0; $i<=5; $i++){
  $l = trim(fgets(STDIN));
  $myarray[$i] = $l;
  echo "aaa".$myarray[$i];
}

echo max($myarray)."\n";
echo min($myarray);

?>
