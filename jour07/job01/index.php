<?php
session_start();        // Si vous oubliez de lancer  session_start() , vous ne pourrez pas accéder aux variables superglobales  $_SESSION

if(isset($_SESSION['nbvisites'])){
    $_SESSION['nbvisites']++;   //compte le nombre de visiteurs
}
else $_SESSION['nbvisites']=1;  //initialise le compteur a 1

if(isset($_POST['reset'])){ 
    $_SESSION['nbvisites']=0;   //reinitialise le compteur a 0
    header("location:index.php");
}

echo $_SESSION['nbvisites'];
?>

<form action="index.php" method="post">
<input type="submit" name="reset" value="Reset">
</form>