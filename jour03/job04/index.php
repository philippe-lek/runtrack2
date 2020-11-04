<?php

$str='Dans l\'espace, personne ne vous entend crier';
$strlen=0;                          //on initialise la longueur de la chaine de caractere a 0

while(isset($str[$strlen])){       //on parcours la chaine de caractere jusqu'a se retrouver sur un element vide
    $strlen++;                      //on compte le nombre de caracteres
}
echo $strlen.'<br>';                       //on affiche la longueur de la chaine de caractere

?>