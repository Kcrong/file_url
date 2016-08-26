<?php
include_once("connect_db.php");
$result = $db->query($_GET['no']);
echo $result;
?>
