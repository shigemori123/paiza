<?php
$line=trim(fgets(STDIN));
$a=explode(" ", $line);

if($a[0]==$a[1]){
    echo "eq";
}else{
    echo max($a);
}
?>
