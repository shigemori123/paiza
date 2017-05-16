<?php

$myarray = array();
for($i=0; $i<2; $i++){
  $l = trim(fgets(STDIN));
  $myarray[$i] = $l;
  $a[$i]=explode(" ", $myarray[$i]);
}

$count=1;
for($i=0;$i<5;$i++){
    if($a[1][0]>$a[0][$i]){
        $count++;
    }
}

echo $count;


?>
