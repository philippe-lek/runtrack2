<form action="index.php" method="get">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    First name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
$nbrarg=0;

foreach($_GET as $key => $value){       //parcours le tableau associatif $_GET
    $nbrarg++;              //compte le nombre d'arguments
}
echo $nbrarg;
?>