<?php
$myarray = array();
for($i=0; $i<7; $i++){
  $l = trim(fgets(STDIN));
  $myarray[$i] = $l;

}

if ($myarray[0]==$myarray[1] and $myarray[1]==$myarray[2]) {
    echo "YES";
}else{
    echo "NO";
}
?>
