<?php

for ($i=0; $i<=100; $i++){
    if($i%3==0 && $i%5==0){         //on teste la double condition en premier pour eviter que cette occurence se retrouve dans une condition moins forte 
        echo 'FizzBuzz<br>';
    }
    else if($i%3==0){               //else if pour traiter les elements qui ne sont pas exclusivement multiple de 5 et de 3   
        echo 'Fizz<br>';
    }                            
    else if($i%5==0){                
        echo 'Buzz<br>';
    }
    else
    echo $i.'<br>';
}

?>