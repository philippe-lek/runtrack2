<form action="index.php" method="get">
    Name: <input type="text" name="nombre">
    <input type="submit" name="submit">
</form>

<?php
if(isset($_GET['submit'])){                    //si l'utilisateur valide le formulaire
    if($_GET['nombre']%2==0){
        echo 'Nombre pair';
    }
    else
    echo 'Nombre impair';
}
?>
