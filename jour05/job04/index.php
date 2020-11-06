<?php

function calcule(int $a, $operation, int $b){      
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
        return ('erreur : parametre incorrecte');       // gere les erreurs d'operateur
}
}

?>