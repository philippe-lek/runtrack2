<?php
if(isset($_POST['submit'])){                   
    if($_POST['style']=='style1'){
        echo '<head><link rel="stylesheet" href="style1.css"></head>';
    }
    if($_POST['style']=='style2'){
        echo '<head><link rel="stylesheet" href="style2.css"></head>';
    }
    if($_POST['style']=='style3'){
        echo '<head><link rel="stylesheet" href="style3.css"></head>';
    }
}
?>
<body>
    <form action="index.php" method="post">
    <select name="style">
       <option value="style1">Red</option>
       <option value="style2">Green</option>
       <option value="style3">Blue</option>
    </select>
    <input type="submit" name="submit">
    </form>
    
</body>
</html>