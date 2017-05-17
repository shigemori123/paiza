<?php
$line=trim(fgets(STDIN));

$x=strlen($line);
if($x==3){
    echo $line;
}else if($x==2){
    echo "0".$line;
}else if($x==1){
    echo "00".$line;
}

?>
