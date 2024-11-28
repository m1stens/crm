<?php
	require_once("connect.php");

	$id = $_POST['id'];
	$name = $_POST['username'];
	$age = $_POST['age'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

    $sql ="UPDATE `TClient` SET `fFIO` = '$name', `fAge` = '$age', `fPhone_number` = '$phone', `fEmail` = '$email' WHERE `TClient`.`fid_client` = '$id'";
	mysqli_query($conn, $sql);
	header('Location: client.php');