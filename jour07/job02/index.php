<?php

if(isset($_POST['reset'])){ 
   $_COOKIE['nbvisites']=0;     //reinitialise la valeur de nbvisites a 1
   header("location:index.php");
}
if(isset($_COOKIE['nbvisites'])){
    setcookie('nbvisites', $_COOKIE['nbvisites']+1);        //incremente la valeur de nbvisites
}
else setcookie('nbvisites', 1);     //creer la variable nbvisites

echo $_COOKIE['nbvisites'];
?>

<form action="index.php" method="post">
<input type="submit" name="reset" value="Reset">
</form>