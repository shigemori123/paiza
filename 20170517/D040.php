<?php
$myarray = array();
for($i=0; $i<7; $i++){
  $l = trim(fgets(STDIN));
  $myarray[$i] = $l;
  $a[$i]=explode(" ", $myarray[$i]);
}
$count=0;
for($i=0;$i<7; $i++){
    if($a[$i][0]<=30){
        $count++;
    }
}
echo $count;

?>
