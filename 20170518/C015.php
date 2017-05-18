<?php
$myarray = array();
$l = trim(fgets(STDIN));
$myarray[0] = $l;
for($i=1; $i<=$myarray[0]; $i++){
  $l = trim(fgets(STDIN));
  $myarray[$i] = $l;
  $a[$i]=explode(".", $myarray[$i]);
  $b[$i]=count($a[$i]);
}

$over=0;


for($i=1; $i<=$myarray[0]; $i++){
    if($b[$i]==4){
        for($j=0;$j<$b[$i];$j++){
            if($a[$i][$j]>255){
                $over++;
                break;
            }
        }
        if($over==0){
            echo "True";
            if($i==$myarray[0]){
                break;
            }
        }else{
            echo "False";
            if($i==$myarray[0]){
                break;
            }
        }

    }else{
        echo "False";
        if($i==$myarray[0]){
            break;
        }
    }
    echo "\n";
}




?>
