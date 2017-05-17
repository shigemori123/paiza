<?php
$myarray = array();
for($i=0; $i<=7; $i++){
  $l = trim(fgets(STDIN));
  $myarray[$i] = $l;
}

$count=0;
for($i=0;$i<=7;$i++){
    if($myarray[$i]=="no")
        $count++;
    }
}


echo $count;

?>
