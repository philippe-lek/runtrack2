<?php
function grass($str){
    $alphabet='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    
    for($i=0; isset($alphabet[$i]); $i++){
        if($alphabet[$i]==$str[0]){             //teste la 1ere lettre
            return ('<b>'.$str.'</b>');
        }
    }
    return ($str);
}

function cesar($str, $decalage=2){
    $ALPHABET='ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $alphabet='abcdefghijklmnopqrstuvwxyz';
    
    for($i=0; isset($str[$i]); $i++){
        for($j=0; isset($alphabet[$j]); $j++){
            if($str[$i]==$alphabet[$j]){
                $str[$i]=$alphabet[($j+($decalage))%26];
                break;                                      //on break car la valeur de str[i] a changer durant la boucle
            }
            else if($str[$i]==$ALPHABET[$j]){
                $str[$i]=$ALPHABET[($j+($decalage))%26];    
                break;
            }                
         }
     }
    return ($str);
}

function plateforme($str){
    for($i=0; isset($str[$i]); $i++){
        if($str[strlen($str)-2]=='m' && $str[strlen($str)-1]=='e'){
            return $str.'_';                        //on ajoute un underscore lorsque la chaine de caractere fini par 'me'
        }
    }
}

?>

<form action="index.php" method="post">
str: <input type="text" name="str"><br>
<select name="fonction">
   <option value="grass">grass</option>
   <option value="cesar">cesar</option>
   <option value="plateforme">plateforme</option>
</select>
<input type="submit" name="submit">
</form>

<?php

if(isset($_POST['submit'])){                    //si l'utilisateur valide le formulaire
    if(!empty($_POST['str'])){                  //verifie si str est vide
        if($_POST['fonction']=='grass'){
            $resultat=grass($_POST['str']);
        }
        if($_POST['fonction']=='cesar'){
            $resultat=cesar($_POST['str']);
        }
        if($_POST['fonction']=='plateforme'){
            $resultat=plateforme($_POST['str']);
        }
        echo $resultat;
    }
}

?>