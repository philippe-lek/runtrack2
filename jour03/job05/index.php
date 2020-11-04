<?php
//Creation et initialisation d'une string str et son equivalent en minuscule
$str='On n est pas le meilleur quand on le croit mais quand on le sait';    

//Creation d'un tableau multidimensionnel avec comme keys 'voyelles' et 'consonnes'
$dic=[                          
    'voyelles'=> ['a', 'e', 'i', 'o', 'u','y', 'A', 'E', 'I', 'O', 'U','Y'],      
    'consonnes'=>['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z']
];

//Algorithme qui parcourt,compte et stocke le nombre de voyelles de str 
$voyelles=0;
$consonnes=0;
$espaces=0;
$strlen=0;

while(isset($str[$strlen])){       
    $strlen++;                          
}

for($i=0; $i!=$strlen; $i++){
    $j=0;
    while(!empty($dic['voyelles'][$j])){
        if($str[$i]==$dic['voyelles'][$j]){
            $voyelles++;
        }
        $j++;
    }
    if($str[$i]==' '){
        $espaces++;             //compte le nombre d'espaces
    }
}

//Compte le nombre de consonnes de str
$consonnes=$strlen-($voyelles+$espaces);

?>

<html>
    <table>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    echo '<td>'.$voyelles.'</td>';
                    echo '<td>'.$consonnes.'</td>';
                ?>
            </tr>
        </tbody>
    </table>
</html>