<?php
	include("connect.php");
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
			<form action="form-product.php" method="post" class="form">
						
                    <select name="components" id="components" class="form-control" required>
							<option value="" selected disabled>Не выбрано</option>
							<option value="Процессор">Процессор</option>
							<option value="Видеокарта">Видеокарта</option>
							<option value="Материнская плата">Материнская плата</option>
							<option value="Оперативная память">Оперативная память</option>
							<option value="HDD диск">HDD диск</option>
							<option value="SSD диск">SSD диск</option>
							<option value="Блок питания">Блок питания</option>
							<option value="Корпус">Корпус</option>
						</select><br>
					<input type="text" name="name_product" placeholder="Введите название" class="form-control" ><br>
					<input type="number" name="amount" placeholder="Введите количество" class="form-control" ><br>
					<input type="submit" name="button" value="Отправить" class="btn">
		</div>
	</main>
</body>
</html>
<?php
	include("connect.php");

	$components = $_POST['components'];
	$name_product = $_POST['name_product'];
	$amount = $_POST['amount'];
	

	if(trim($name_product) == "")
		echo "Вы не ввели название комплектующего";
	else if(strlen(trim($name_product)) <= 1)
		echo "Такого названия не существует";
	else if(trim($components) == "" || trim($amount) == "")
		echo "Введите все данные";
	else{
	$sql = "INSERT INTO `TProduct` (`fType_product`, `fName_product`, `fAmount_product`) VALUES ('$components', '$name_product', '$amount')";
	$result = mysqli_query($conn,$sql);
	$id_insert = mysqli_insert_id($conn);

	}
	
	exit;
?>

	