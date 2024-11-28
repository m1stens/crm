<?php
	include("connect.php");
	$result = mysqli_query($conn, "SELECT * FROM `TClient`");
	$result1 = mysqli_query($conn, "SELECT * FROM `TProduct`");

	
	$product = mysqli_fetch_assoc($result1);
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
			<form action="/form-purchase.php" method="post" class="form">
						<select name="username" class="form-control" required>
							<option value="" selected disabled>Не выбрано</option>
							<?php 
							while($client = mysqli_fetch_assoc($result)){
							?>
								<option value="<?= $client['fFIO']?>"><?php	echo $client['fFIO'];?></option>
							<?php
								}
							?>
						</select>
						<select name="name_product" class="form-control" required>
							<option value="" selected disabled>Не выбрано</option>
							<?php 
							while($product = mysqli_fetch_assoc($result1)){
							?>
								<option value="<?= $product['fName_product']?>"><?php	echo $product['fName_product'];?></option>
							<?php
								}
							?>
						</select>
				
					<input type="number" name="amount" placeholder="Введите количество" class="form-control" ><br>
					<input type="date" name="date" placeholder="Введите дату" class="form-control" ><br>

					<input type="submit" name="button" value="Отправить" class="btn">
		</div>
	</main>
</body>
</html>
<?php
	include("connect.php");

	$username = $_POST['username'];
	$name_product = $_POST['name_product'];
	$amount = $_POST['amount'];
	$date= $_POST['date'];
	

	if(trim($name_product) == "")
		echo "Вы не ввели название комплектующего";
	else if(strlen(trim($name_product)) <= 1)
		echo "Такого названия не существует";
	else if(trim($username) == "" || trim($amount) == "" || trim($date) == "")
		echo "Введите все данные";
	else{
	$sql = "INSERT INTO `TPurchase` (`fFIO`, `fName_product`, `fAmount_product`, `fDate`) VALUES ('$username', '$name_product', '$amount', '$date')";
	$result = mysqli_query($conn,$sql);
	$id_insert = mysqli_insert_id($conn);

	}
?>

