<?php

$line=trim(fgets(STDIN));

if(strlen($line)>=12){
    echo "OK";
}else{
    $x=12-strlen($line);
    echo $x-1;
}


?>
