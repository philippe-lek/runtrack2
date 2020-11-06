<form action="index.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    First name: <input type="text" name="fname">
    <input type="submit" name="submit">
</form>

<?php
$nbrarg=0;

foreach($_POST as $key => $value){      ////parcours le tableau associatif $_POST
    $nbrarg++;              //compte le nombre d'arguments
}
echo $nbrarg;
?>