<?php

for ($i=0; $i<=1337; $i++){                 //on utilise une boucle for car on connait la valeur maximale de $i
    if($i!=42){                             //si $i est different de 42 on affiche la valeur de $i sans style
        echo $i.'<br>';                     
    }
    else {                                  //si $i=42 on affiche $i avec du style
        echo '<b><u>'.$i.'</u></b><br>';
    }
}

?>