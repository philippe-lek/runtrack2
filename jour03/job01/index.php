<?php

$tableau=[200, 204, 173, 98, 171, 404, 459];        //on creer $tableau ,un tableau qui contient des nombres

for($i=0; $i!=count($tableau); $i++){               //on parcoure le tableau jusqu'a sa taille maximale
    if($tableau[$i]%2==0){                          //on teste si $i est paire(divisible par 2)
        echo $tableau[$i].' est paire<br>';
    }
    else
    echo $tableau[$i].' est impaire<br>';
}

?>