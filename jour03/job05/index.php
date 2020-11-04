<?php
//Creation d'une string str
$str='On n est pas le meilleur quand on le croit mais quand on le sait';    

//Creation d'un tableau avec comme keys 'voyelles' et 'consonnes' initialise a 0
$dic=[                          
    'voyelles'=> 0,      
    'consonnes'=> 0
];

$voyelles='aeiouyAEIOUY';   //voyelles de test
$nbrespaces=0;
$strlen=0;

while(isset($str[$strlen])){       
    $strlen++;                          
}

for($i=0; isset($str[$i]); $i++){                      //on parcourt la string str
    for($j=0; isset($voyelles[$j]); $j++){             //on parcourt la string voyelles
        if($str[$i]==$voyelles[$j]){                   //on cherche les occurences de voyelles
            $dic['voyelles']++;
        }
    }
    if($str[$i]==' '){
        $nbrespaces++;                                 //on compte le nombre d'espaces
    }
}

//Compte le nombre de consonnes de str
$dic['consonnes']=$strlen-($dic['voyelles']+$nbrespaces);

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
                    echo '<td>'.$dic['voyelles'].'</td>';
                    echo '<td>'.$dic['consonnes'].'</td>';
                ?>
            </tr>
        </tbody>
    </table>
</html>