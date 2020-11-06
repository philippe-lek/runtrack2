<?php

function calcule(int $a,  int $b){
    switch($operation){
    case '+':
        return ($a+$b);
    case '-':
        return ($a-$b);
    case '*':
        return ($a*$b);
    case '/':
        return ($a/$b);
    case '%':
        return ($a%$b);
    default:
        return ('erreur : parametre incorrecte');
}
}

?>