<?php

$str='Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.';

$strlen=0;
while(isset($str[$strlen])){       
    $strlen++;                          
}
for($i=0; $i!=$strlen; $i++){
    if($i%2==0){                            //On applique une condition pour afficher la chaine de caracteres lorsque l'index est paire. 
        echo $str[$i];
    }
}

?>