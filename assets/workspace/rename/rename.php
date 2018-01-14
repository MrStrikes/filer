<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../../../assets/styles.css">
    <title>Rename your file</title>
</head>
<body>
    <?php
    require('../../init.php');
    require('../../header.php');
    ?>
    <form action="rename.php" method="GET">
        <input type="text" name="new" placeholder="Your new file name">
        <input type="submit" name="submit" value="Rename !">
    </form>
    <?php
    $oldData = $_GET['hiddenFile'];
    $newData = $_GET['new'];
    $path = '../../../assets/users/'.$_SESSION['username'].'/';
    $rename = $path.$newData;
    echo $oldData.'<br>';
    echo $rename;
    if(isset($_GET['submit']) && isset($_GET['new'])){
        rename($oldData, $rename);
    }
    require("../../footer.php");
    ?>
</body>
</html>