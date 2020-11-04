<?php

$str='Les choses que l\'on possede finissent par nous posseder.';
$memo=0;

for($i=0; $i<strlen($str)/2; $i++){
    $memo=$str[$i];                         //on stocke dans une variable intermediaire pour permuter les valeurs de debut et de fin 
    $str[$i]=$str[strlen($str)-1-$i];              
    $str[strlen($str)-1-$i]=$memo;          //lorsque $i incremente, on parcourt la chaine de caractere dans l'autre sens 
}
echo $str;

?>