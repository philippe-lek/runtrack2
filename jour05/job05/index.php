<?php

function mystrlen(string $str){
    $taille=0;
    for($i=0; isset($str[$i]); $i++){
        $taille++;
    }
    return ($taille);
}

function occurences(string $str, $char){
    $nbr=0;
    if(mystrlen($char)==1){
        for($i=0; isset($str[$i]); $i++){
            if($str[$i]==$char){
                $nbr++;             //compte le nombre d'occurence
            }
        }
        return ($nbr);
    }
    else
    return ('erreur :$char accepte qu\'un seul caractere en parametre');
}

?>