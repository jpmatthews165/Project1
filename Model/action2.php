<?php

session_start();
require "../Model/db.php";

$email= $_POST["email"];
$password= $_POST["password"];


$sql = "select * from jm775.accounts where email = '$email'";
$results = runQuery($sql);
if (count($results) < 1) {
	echo "Email is incorrect";
	require "../View/login.php";
} else {

	$sql = "select * from jm775.accounts where email = '$email' AND password = '$password'";
	$results = runQuery($sql);
	if (count($results) < 1) {
		echo "Passowrd is incorrect";
		require "../View/login.php";
	} else {
		$fname=$results[0]['fname'];
		$lname=$results[0]['lname'];
		$id=$results[0]['id'];
		$_SESSION['fname'] = $fname;
		$_SESSION['lname'] = $lname;
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		$_SESSION['ownerid'] = $id;
		header("Location: ../Controller/todo.php");
	}

}

?>