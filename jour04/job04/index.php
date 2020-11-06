<form action="index.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    First name: <input type="text" name="fname">
    <input type="submit" name="submit">
</form>

<table>
    <thead>
        <tr>
            <th>argument</th>
            <th>valeur</th>
        </tr>
    </thead>
    <tbody>
    
<?php
foreach($_POST as $key => $value){
    echo '<tr><td>'.$key.'</td><td>'.$value.'</td><tr>';        //creer chaque lignes du tableau
}
?>

    </tbody>
</table>