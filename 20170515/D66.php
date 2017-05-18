<?php
$line=trim(fgets(STDIN));
$a=explode(" ", $line);//必要スタミナ
//$n=trim(fgets(STDIN));//持ちスタミナ
$b=$a[1]-$a[0];

if($b<0){
    echo "No";
}else{
    echo $b;
}




 ?>
