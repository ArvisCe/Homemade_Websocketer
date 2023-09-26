<?php include 'database.php' ?>
<?php include 'websocket.php' ?>

<?php
$id = getallheaders()['id'];
echo update_value('test_table','number',$id);
?>