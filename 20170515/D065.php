<?php
$line=trim(fgets(STDIN));

if(200<=$line==$line<=299){
        echo "ok";
}else if(400<=$line==$line<=499){
        echo "error";
}else{
    echo "unknown";
}
 ?>
