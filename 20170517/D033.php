<?php
$line=trim(fgets(STDIN));
$a=explode(" ", $line);

echo substr($a[0],0,1).".".substr($a[1],0,1);
?>
