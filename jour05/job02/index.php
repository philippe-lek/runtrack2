<?php

function bonjour(bool $jour){       //on definit le type bolean par bool 
    if($jour == true){
        echo 'Bonjour<br>';
    }
    if($jour == false){
        echo 'Bonsoir<br>';
    }
}

?>