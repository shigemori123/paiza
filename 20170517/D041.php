<?php
$line=trim(fgets(STDIN));
$a=explode(" ", $line);

$x=$a[1]*$a[2];

if($a[0]<=$x){
    echo "OK";
}else{
    echo "NG";
}
?>
