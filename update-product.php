<?php
	include("connect.php");

	
	$product_id = $_GET['id'];
	$sql = "SELECT * FROM `TProduct` WHERE `fid_product` = '$product_id'";
	$result = mysqli_query($conn,$sql);
	$product = mysqli_fetch_assoc($result);
	
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
								<li class="nav-list__item"><a href="/product.php" class="nav-list__link nav-list__link--active">Товары</a></li>
								<li class="nav-list__item"><a href="/purchase.php" class="nav-list__link">Покупки</a></li>
						</ul>

				</div>
		</div>
	</nav>

	<main>
		<div class="container-block">
			<div class="title-block">
				<h1>Товары</h1>
			</div>
			<form action="/check-update-product.php" method="post" class="form">
				
				<input type="hidden" name="id" value="<?= $product['fid_product'] ?>">
				<select name="components" id="components" class="form-control" required>
							<option value="" disabled>Не выбрано</option>
							<option value="<?= $product['fType_product']?>"><?= $product['fType_product']?></option>
							<option value="Процессор">Процессор</option>
							<option value="Видеокарта">Видеокарта</option>
							<option value="Материнская плата">Материнская плата</option>
							<option value="Оперативная память">Оперативная память</option>
							<option value="HDD диск">HDD диск</option>
							<option value="SSD диск">SSD диск</option>
							<option value="Блок питания">Блок питания</option>
							<option value="Корпус">Корпус</option>
						</select>
                    
					<input type="text" name="name_product" placeholder="Введите название" class="form-control" value="<?= $product['fName_product']?>"><br>
					<input type="number" name="amount" placeholder="Введите количество" class="form-control" value="<?= $product['fAmount_product']?>"><br>
					<input type="submit" name="button" value="Отправить" class="btn">

		</div>
	</main>
</body>
</html>