<?php
$moji[0]="A";
$moji[1]="B";
$moji[2]="C";
$moji[3]="D";
$moji[4]="E";
$moji[5]="F";
$moji[6]="G";
$moji[7]="H";
$moji[8]="I";
$moji[9]="J";

$line=trim(fgets(STDIN));
$x=explode(" ", $line);

//$a=10-$x[0];
//$b=$a-$x[1];
//$c=$b-$x[2];
$a=$x[0]+$x[1];
$b=$a+$x[2];

for($i=0;$i<$x[0];$i++){
    print $moji[$i];
}
print "\n";
for($i=$x[0];$i<$a;$i++){
    echo $moji[$i];
}
print "\n";
for($i=$a;$i<$b;$i++){
    echo $moji[$i];
}
?>
