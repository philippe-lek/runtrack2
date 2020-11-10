<?php
session_start();
if(isset($_GET['reset'])){
    session_destroy();
    header("location:index.php");
}
if(empty($_GET)){
    $_SESSION['tour']=0;
}
if (!isset($_SESSION['string'])){
    $_SESSION['string']='---------';
}
else
{
    $position=0;
    foreach($_GET as $KEY=>$value){
        $position=$KEY;
    }  
    if($_SESSION['tour']%2==0){
        $_SESSION['string'][$position]='X';
    }
    else $_SESSION['string'][$position]='O';
    
    if(($_SESSION['string'][0]=='X' && $_SESSION['string'][1]=='X' && $_SESSION['string'][2]=='X') ||
    ($_SESSION['string'][3]=='X' && $_SESSION['string'][4]=='X' && $_SESSION['string'][5]=='X') ||
    ($_SESSION['string'][6]=='X' && $_SESSION['string'][7]=='X' && $_SESSION['string'][8]=='X') ||
    ($_SESSION['string'][0]=='X' && $_SESSION['string'][3]=='X' && $_SESSION['string'][6]=='X') ||
    ($_SESSION['string'][1]=='X' && $_SESSION['string'][4]=='X' && $_SESSION['string'][7]=='X') ||
    ($_SESSION['string'][2]=='X' && $_SESSION['string'][5]=='X' && $_SESSION['string'][8]=='X') ||
    ($_SESSION['string'][0]=='X' && $_SESSION['string'][4]=='X' && $_SESSION['string'][8]=='X') ||
    ($_SESSION['string'][2]=='X' && $_SESSION['string'][4]=='X' && $_SESSION['string'][6]=='X')){
        echo 'X a gagné<br>';   
    }
    else if(($_SESSION['string'][0]=='O' && $_SESSION['string'][1]=='O' && $_SESSION['string'][2]=='O') ||
    ($_SESSION['string'][3]=='O' && $_SESSION['string'][4]=='O' && $_SESSION['string'][5]=='O') ||
    ($_SESSION['string'][6]=='O' && $_SESSION['string'][7]=='O' && $_SESSION['string'][8]=='O') ||
    ($_SESSION['string'][0]=='O' && $_SESSION['string'][3]=='O' && $_SESSION['string'][6]=='O') ||
    ($_SESSION['string'][1]=='O' && $_SESSION['string'][4]=='O' && $_SESSION['string'][7]=='O') ||
    ($_SESSION['string'][2]=='O' && $_SESSION['string'][5]=='O' && $_SESSION['string'][8]=='O') ||
    ($_SESSION['string'][0]=='O' && $_SESSION['string'][4]=='O' && $_SESSION['string'][8]=='O') ||
    ($_SESSION['string'][2]=='O' && $_SESSION['string'][4]=='O' && $_SESSION['string'][6]=='O')){
        echo 'O a gagné<br>';
    }
    else if($_SESSION['tour']==8){
        echo 'Match nul';
    }
    $_SESSION['tour']++;
}
?>
<form action="index.php" method="get">
<table>
<?php
for($i=0; isset( $_SESSION['string'][$i]); $i++){
    if(($i==0)||($i==3)||($i==6)){
        echo '<tr>';}
        echo '<td><input type=\'submit\' name='.$i.' value='.$_SESSION['string'][$i].' id=\'0\'></td>';
        if(($i==2)||($i==5)||($i==8)){
            echo '</tr>';
        }
    }
    ?>
</table>
<input type="submit" name="reset" value="réinitialiser la partie">
</form>