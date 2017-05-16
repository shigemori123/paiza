<?php
$line=trim(fgets(STDIN));
$a=explode(" ", $line);

if($a[0]=="J"){
    if($a[1]=="J"){
        $a[1]="Q";
    }
}

echo $a[0]." ".$a[1];
 ?>
