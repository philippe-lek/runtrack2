<?php
// Créez un formulaire qui contient un input nommé “str” de type text, une liste
// déroulante (select) nommée “fonction” et un bouton submit. Lorsque vous
// validez le formulaire, vous devez appliquer des transformations à “str” en
// fonction de l’option choisie dans la liste déroulante. Les choix possibles
// sont :
// - “gras” : une fonction qui prend en paramètre “str”. Elle écrit “str” en
// mettant en gras (<b>) les mots commençant par une lettre majuscule.
// - “cesar” : une fonction qui prend en paramètre “str” et un nombre
// “decalage” (qui vaut 2 par défaut). La chaine est affichée en décalant
// chaque caractère d’un nombre égal à “decalage”.
// ex : si decalage vaut 1, e devient f. Si décalage vaut 3, z devient c.
// - “plateforme”, une fonction qui prend en paramètre “str”. Elle écrit “str”
// en ajoutant un “_” aux mots finissant par “me”.


function grass(string $str){
    $alphabet='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    for($i=0; isset($alphabet[$i]); $i++){
        if($alphabet[$i]==$str[0]){
            return ('<b>'.$str.'</b>');
        }
    }
    return ($str);
}
function cesar(string $str, int $decalage){
     $alphabet='abcdefghijklmnopqrstuvwxyz';

     for($i=0; isset($str[$i]); $i++){
         for($j=0; isset($alphabet[$j]); $j++){
             if($str[$i]==$alphabet[$j]){
                 $str[$i]=$alphabet[($j+($decalage))%26];
             break;
             }                  
         }
     }
    return ($str);
}
function plateforme($str){
    for($i=0; isset($str[$i]); $i++){
        if($str[strlen($str)-2]=='m' && $str[strlen($str)-1]=='e'){
            return $str.'_';
        }
    }
}
echo plateforme('dame');
?>