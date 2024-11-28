<?php
	include("connect.php");

	$id = $_GET['id'];

	$sql = "DELETE FROM `TProduct` WHERE `TProduct`.`fid_product` = '$id'";
	mysqli_query($conn, $sql);
	header('Location: product.php');