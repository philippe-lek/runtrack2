<?php
$male=true;
$age=31;
$prenom="philippe";
$taille=1.67;
?>

<html>
    <table>
        <thead>
            <tr>
                <th>type</th>
                <th>nom</th>
                <th>valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    echo '<td>'.gettype($age).'</td>';
                    echo '<td>$age</td>';
                    echo '<td>'.$age.'</td>';
                ?>
            </tr>
            <tr>
                <?php
                    echo '<td>'.gettype($prenom).'</td>';
                    echo '<td>$prenom</td>';
                    echo '<td>'.$prenom.'</td>';
                ?>
            </tr>
            <tr>
                <?php
                    echo '<td>'.gettype($taille).'</td>';
                    echo '<td>$taille</td>';
                    echo '<td>'.$taille.'</td>';
                ?>
            </tr>
            <tr>
                <?php
                    echo '<td>'.gettype($male).'</td>';
                    echo '<td>$male</td>';
                    echo '<td>'.$male.'</td>';
                ?>
            </tr>
        </tbody>
    </table>
</html>
