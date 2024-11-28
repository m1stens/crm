<?php
	include("connect.php");

    $client_id = $_GET['id'];
	$sql = "SELECT * FROM `TClient` WHERE `fid_client` = '$client_id'";
	
	$result = mysqli_query($conn,$sql);
	$client = mysqli_fetch_assoc($result);

	
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
							<li class="nav-list__item"><a href="/client.php" class="nav-list__link nav-list__link--active">Клиенты</a></li>
								<li class="nav-list__item"><a href="/product.php" class="nav-list__link">Товары</a></li>
								<li class="nav-list__item"><a href="/purchase.php" class="nav-list__link">Покупки</a></li>
						</ul>

				</div>
		</div>
	</nav>

	<main>
		<div class="container-block">
			<div class="title-block">
				<h1>Клиенты</h1>
			</div>
			<form action="check-update.php" method="post" class="form">
			    <input type="hidden" name="id" value="<?= $client['fid_client'] ?>">
			    <input type="text" name="username" placeholder="Введите ФИО" class="form-control" value="<?= $client['fFIO']?>"><br>
				<input type="text" name="phone" placeholder="Введите телефон" class="form-control" value="<?= $client['fPhone_number']?>"><br>
				<input type="email" name="email" placeholder="Введите email" class="form-control" value="<?= $client['fEmail']?>"><br>
				<input type="submit" name="button" value="Отправить" class="btn">
		</div>
	</main>
	
</body>
</html>
