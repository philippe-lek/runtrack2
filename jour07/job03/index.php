<form action="index.php" method="post">
<input type="text" name="prenom">
<input type="submit" name="submit">
<input type="submit" name="reset" value="Reset">
</form>

<?php
session_start();

if(isset($_POST['reset'])){
    $_SESSION['prenom']='';     //vide ma variable prenom
}
if(!empty($_POST['prenom'])){
    if(isset($_POST['submit'])){
        $_SESSION['prenom']=$_SESSION['prenom'].'<br>'.$_POST['prenom'];    //ajoute le prenom du formulaire a la ligne
    }
}
echo $_SESSION['prenom'];

?>
