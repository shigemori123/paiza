<?php
$line=trim(fgets(STDIN));

if(0<=$line and $line<=30){
    echo "sunny";
}else if(30<$line and $line<=70){
    echo "cloudy";
}else if(70<$line){
    echo "rainy";
}
?>
