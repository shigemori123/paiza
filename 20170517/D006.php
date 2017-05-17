<?php
$line=trim(fgets(STDIN));
$a=explode(" ", $line);

if($a[1]=="km"){
    echo $a[0]."000000";
}else if($a[1]=="m"){
    echo $a[0]."000";
}else if($a[1]=="cm"){
    echo $a[0]."0";
}
?>
