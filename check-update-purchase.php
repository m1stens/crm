<?php
	include("connect.php");

	$id = $_POST['id'];
	$username = $_POST['username'];
	$name_product = $_POST['name_product'];
	$amount = $_POST['amount'];
	$date = $_POST['date'];

	
	$sql = "UPDATE `TPurchase` SET `fFIO` = '$username', `fName_product` = '$name_product', `fAmount_product` = '$amount', `fDate` = '$date' WHERE `TPurchase`.`fid_purchase` = '$id'";
	
	mysqli_query($conn, $sql);
	header('Location: /purchase.php');
