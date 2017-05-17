<?php
$l = trim(fgets(STDIN));
$myarray = array();
echo "Hello ";

for($i = 1; $i <= $l; $i ++){
    $x = trim(fgets(STDIN));
    $myarray[$i] = $x;
    if($i == $l){
        break;
    }
    echo $myarray[$i].",";

}
echo $myarray[$i].".";
 ?>
