<?php

$str='I\'m sorry Dave I\'m afraid I can\'t do that'; //on echappe l'apostrophe avec un antislash 
for($i=0; $i!=strlen($str); $i++){    //on parcoure la chaine de caractere
    switch( $strlow[$i]){               //on utilise switch pour prendre en compte les 6 voyelles de l'alphabet
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
        case 'y':
        case 'A':
        case 'E':
        case 'I':
        case 'O':
        case 'U':
        case 'Y':
            echo $str[$i];              //on affiche le caractere lorsque c'est une voyelle
        break;              
    }
}

?>