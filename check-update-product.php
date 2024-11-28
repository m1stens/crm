<?php
	include("connect.php");

	$id = $_POST['id'];
	$components = $_POST['components'];
	$name_product = $_POST['name_product'];
	$amount = $_POST['amount'];

	$sql = "UPDATE `TProduct` SET `fType_product` = '$components', `fName_product` = '$name_product', `fAmount_product` = '$amount' WHERE `TProduct`.`fid_product` = '$id'";
	mysqli_query($conn, $sql);
    header('Location: /product.php');