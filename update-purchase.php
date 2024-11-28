<?php
	include("connect.php");

	$result1 = mysqli_query($conn, "SELECT * FROM `TProduct`");
	$purchase_id = $_GET['id'];
	$sql = "SELECT * FROM `TPurchase` WHERE `fid_purchase` = '$purchase_id'";
	$result = mysqli_query($conn,$sql);
	$purchase = mysqli_fetch_assoc($result);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/reset.css">
	<title>Document</title>
</head>
<body>
	<nav class="nav">
		<div class="container1">
				<div class="nav-row">
						<a href="./index.html" class="logo"><strong>CRM</strong></a>

						<ul class="nav-list">
							<li class="nav-list__item"><a href="/client.php" class="nav-list__link">Клиенты</a></li>
								<li class="nav-list__item"><a href="/product.php" class="nav-list__link">Товары</a></li>
								<li class="nav-list__item"><a href="/purchase.php" class="nav-list__link nav-list__link--active">Покупки</a></li>
						</ul>

				</div>
		</div>
	</nav>

	<main>
		<div class="container-block">
			<div class="title-block">
				<h1>Покупки</h1>
			</div>
			<form action="./check-update-purchase.php" method="post" class="form">
			    <input type="hidden" name="id" value="<?= $purchase['fid_purchase'] ?>">
						<select name="username" class="form-control" required>
							<option value="" disabled>Не выбрано</option>
							<option value="<?= $purchase['fFIO']?>"><?php	echo $purchase['fFIO'];?></option>

		
						</select>
						<select name="name_product" class="form-control">
							<option value="" disabled>Не выбрано</option>
							<option value="<?= $purchase['fName_product']?>"><?php	echo $purchase['fName_product'];?></option>
							<?php 
							while($product = mysqli_fetch_assoc($result1)){
							?>
								<option value="<?= $product['fName_product']?>"><?php	echo $product['fName_product'];?></option>
							<?php
								}
							?>
						
						</select>
				
					<input type="number" name="amount" placeholder="Введите количество" class="form-control" value="<?= $purchase['fAmount_product']?>"><br>
					<input type="date" name="date" placeholder="Введите дату" class="form-control" value="<?= $purchase['fDate']?>"><br>

					<input type="submit" name="button" value="Отправить" class="btn">

		</div>
	</main>
</body>
</html>