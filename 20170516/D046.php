<?php

$line=trim(fgets(STDIN));
$a=explode(" ", $line);

$max=max($a[0],$a[1],$a[2]);

echo $max;
?>
