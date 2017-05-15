<?php
$line=trim(fgets(STDIN));
$m=explode(" ", $line);//必要スタミナ
//$n=trim(fgets(STDIN));//持ちスタミナ
$a=$m[1]-$m[0];

if($a<0){
    echo "No";
}else{
    echo $a;
}




 ?>
