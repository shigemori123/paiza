<?php
$line=trim(fgets(STDIN));
$a=explode(" ", $line);

$x=$a[0]/$a[1];
$y=$a[0]%$a[1];

echo floor($x)." ".$y;


?>
