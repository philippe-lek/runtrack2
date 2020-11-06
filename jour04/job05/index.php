<form action="index.php" method="post">
    Name: <input type="text" name="username"><br>
    Mot de passe: <input type="password" name="password"/>
    <input type="submit" name="submit">
</form>

<?php

if(isset($_POST['submit'])){                    //si l'utilisateur valide le formulaire
    if($_POST['username']=='John' && $_POST['password']=='Rambo'){
        echo 'C’est pas ma guerre.';
    }
    else
    {
        echo 'Votre pire cauchemar.';
    }
}

?>
