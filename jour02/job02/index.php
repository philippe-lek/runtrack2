<?php

for ($i=0; $i<=1337; $i++){                 
    switch ($i) {
        case 26:
        case 37:
        case 88:
        case 1111:
        case 3233:
            break;              //sort de la boucle pour les valeurs a exclure
        default:
           echo $i.'<br>';      //affiche $i par defaut
    }                                
}

?>