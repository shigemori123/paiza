<?php
$myarray = array();
for($i=0; $i<=2; $i++){
  $l = trim(fgets(STDIN));
  $myarray[$i] = $l;
}

$x=$myarray[1]%$myarray[0];
$y=$myarray[1]/$myarray[0];

if($x==0){
    echo $y;
}else{
    $y++;
    echo floor($y);
}



?>
