<?php

function leetspeak(string $str){
    for($i=0; isset($str[$i]); $i++){
        switch($str[$i]){
            case 'A':
            case 'a':
                $str[$i]=4;
            break;
            case 'B':
            case 'b':
                $str[$i]=8;
            break;
            case 'E':
            case 'e':
                $str[$i]=3;
            break;
            case 'G':
            case 'g':
                $str[$i]=6;
            break;
            case 'L':
            case 'l':
                $str[$i]=1;
            break;
            case 'S':
            case 's':
                $str[$i]=5;
            break;
            case 'T':
            case 't':
                $str[$i]=7;
            break;
        }
    }
    return($str);
}

?>