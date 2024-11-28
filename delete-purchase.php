<?php
	include("connect.php");

	$id = $_GET['id'];

	$sql = "DELETE FROM `TPurchase` WHERE `TPurchase`.`fid_purchase` = '$id'";
	mysqli_query($conn, $sql);
	header('Location: purchase.php');