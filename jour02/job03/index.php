<?php

for ($i=0; $i<=100; $i++){
    if($i>=0 && $i<=20){                    //de 0 a 20, 0 et 20 inclut        
        echo '<i>'.$i.'<br>'.'</i>';        //affiche $i en italique
    }                            
    else if($i>=25 && $i<42){               //de 25 a 42, 25 inclus, 42 exclu 
        echo '<u>'.$i.'<br>'.'</u>';        //affiche $i souligne
    }
    else if($i==42){                        //pour $i est egale a 42
        echo 'La Plateforme_<br>';          //affiche la chaine de caractere "La Plateforme_
    }
    else if($i>42 && $i<=50){               //de 42 a 50, 42 exclus, 50 inclut 
        echo '<u>'.$i.'<br>'.'</u>';        //affiche $i souligne
    }
    else                                    //affiche $i pour tous les autres cas
        echo $i.'<br>';
}

?>