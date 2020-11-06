<?php
$str='abcd';
$decalage=2;
$alphabet='abcdefghijklmnopqrstuvwxyz';
for($i=0; isset($str[$i]); $i++){
    for($j=0; isset($alphabet[$j]); $j++){
        if($str[$i]==$alphabet[$j]){
            $str[$i]=$alphabet[$j+$decalage];
            echo $str[$i];
        break;
        }                  
    }
}
?>