<form action="index.php" method="post">
    hauteur = <input type="text" name="hauteur"><br>
    largeur = <input type="text" name="largeur"><br>
    <input type="submit" name="submit">
</form>

<?php
//boucle pour le toit de la maison
for($i=0; $i!=$_POST['hauteur']; $i++){         
    for($j=0; $j!=($_POST['largeur']/2)-1-$i; $j++){        //on se positione au milieu de la largeur et on decale a gauche par rapport a la valeur de $i
        echo '&nbsp ';                          
    }
    echo '/';
    if($i>0){                                   
        for($k=0; $k!=$i*2; $k++){                          //on ajoute des espaces entre '/' et '\' a chaques lignes
            if($i!=$_POST['hauteur']-1){
                echo '&nbsp ';
            }
            else
            echo '_';
        }
    }
    echo '\\<br>';
}
//boucle pour le rectangle 
for($i=0; $i!=$_POST['hauteur']; $i++){
    echo '|';
    for($j=0; $j!=($_POST['largeur']-2); $j++){              
        if($i!=$_POST['hauteur']-1){
            echo '&nbsp ';                                  //ajoute des espaces jusqu' au bas de la maison pour ajouter des '_'
        }
        else
        echo '_';
    }
    echo '|<br>';
}

?>