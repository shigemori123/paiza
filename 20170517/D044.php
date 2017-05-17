<?php
$line=trim(fgets(STDIN));
$a=explode(" ", $line);

if($a[1]=="F"){
    echo "Hi, Ms. ".$a[0];
}else{
    echo "Hi, Mr. ".$a[0];
}

?>
