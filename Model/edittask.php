<?php
session_start();
require('../Model/db.php');
$item_id = $_SESSION['item_id'];
$duedate = $_POST['duedate'];
$message = $_POST['task'];
$sql = "update todos set duedate='$duedate', message='$message' where id='$item_id'";
echo $sql;
$results = $conn->Query($sql);
print_r($results);
header("Location: ../Controller/todo.php");
?>