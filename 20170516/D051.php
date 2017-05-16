<?php

$line=trim(fgets(STDIN));
$a=explode(" ", $line);
$x=0;
for($i=0;$i<=10;$i++){
    if($a[$i]=="W"){
        $x++;
    }
}

if($x>=5){
    echo "OK";
}else{
    echo "NG";
}
?>
