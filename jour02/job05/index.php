<?php

for($i=0; $i<=1000; $i++){          //on va tester toutes les valeurs de $i de 0 a 1000
    $nbrDiviseur=0;                 //on reinitialise la valeur de $nbrDiviseur pour chaques valeurs de $i  
    for($j=1; $j<=$i; $j++){        //on commence la boucle a 1 car on ne peut pas diviser par zero
        if($i%$j==0){               //on teste si $j est un diviseur de $i
            $nbrDiviseur++;         //on compte le nombre de diviseurs pour chaques valeurs de $i
        }
    }
    if($nbrDiviseur==2){            //Si $i a strictement 2 diviseurs possibles, $i est un nombre premier
        echo $i.'<br>';
    }
}

?>