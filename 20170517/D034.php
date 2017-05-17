<?php
$line=trim(fgets(STDIN));

$x=21%$line;

if($x==0){
    echo $line;
}else{
    echo $x;
}
?>
