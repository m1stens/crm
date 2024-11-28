<?php
	include("connect.php");

	$id = $_GET['id'];

	$sql = "DELETE FROM `TClient` WHERE `TClient`.`fid_client` = '$id'";
	mysqli_query($conn, $sql);
	header('Location: client.php');