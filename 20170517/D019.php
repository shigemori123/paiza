<?php
$line=trim(fgets(STDIN));
$a=explode(" ", $line);

echo substr($a[0],$a[1]);
?>
