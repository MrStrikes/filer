<?php
$delete = $_POST['del'];
$del = $_POST['hiddenFile'];
if(isset($delete)){
    unlink($del);
    header('Location: ../workspace.php');
}
?>