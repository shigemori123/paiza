<?php
$line=trim(fgets(STDIN));
$a=explode(" ", $line);

for($i=0;$i<9;$i++){
    echo $a[0]," ";
    $a[0] = $a[0]+$a[1];
}
echo $a[0];
?>
