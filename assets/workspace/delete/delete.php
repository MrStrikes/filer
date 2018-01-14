<meta http-equiv="refresh" content="0.1; URL=../workspace.php">
<?php
$delete = $_POST['del'];
$del = $_POST['hiddenFile'];
if(isset($delete)){
    unlink($del);
}
?>