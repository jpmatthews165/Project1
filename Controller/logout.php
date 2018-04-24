<?php

session_start();
unset($_SESSION['fname']);
header("Location: ../Controller/todo.php");

?>