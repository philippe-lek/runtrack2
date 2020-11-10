<?php
if(!empty($_COOKIE['prenom'])){
    echo 'Bonjour '.$_COOKIE['prenom'].'!';
    echo '<form action="index.php" method="post">';
    echo '<input type="submit" name="deco" value="Deconnexion">';
    echo '</form>';
}
else{
    echo '<form action="index.php" method="post">';
    echo '<input type="text" name="prenom">';
    echo '<input type="submit" name="connexion" value="Connexion">';
    echo '</form>';
}
if(isset($_POST['connexion'])){
    if(!empty($_POST['prenom'])){
        setcookie('prenom', $_POST['prenom']);
        header("location:index.php");
    }
}
if(isset($_POST['deco'])){
    unset($_COOKIE['prenom']);
    setcookie('prenom', '', 1);
    header("location:index.php");
}
?>