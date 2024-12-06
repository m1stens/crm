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
							<li class="nav-list__item"><a href="./client.php" class="nav-list__link nav-list__link--active">Клиенты</a></li>
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
			<form action="form-client.php" method="post" class="form">
				<input type="text" name="username" placeholder="Введите ФИО" class="form-control"><br>
				<input type="text" name="phone" placeholder="Введите телефон" class="form-control"><br>
				<input type="email" name="email" placeholder="Введите email" class="form-control"><br>
				<input type="submit" name="button" value="Отправить" class="btn">
		</div>
	</main>
</body>
</html>
<?php
	include("connect.php");

	$name = $_POST['username'];
	$age = $_POST['age'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

	if(trim($name) == "")
		echo "Вы не ввели имя пользователя";
	else if(strlen(trim($name)) <= 1)
		echo "Такого имени не существует";
	else if(trim($phone) == "" || trim($email) == "")
		echo "Введите все данные";
	else{
	$sql = "INSERT INTO `TClient` (`fFIO`, `fPhone_number`, `fEmail`) VALUES ('$name', '$phone', '$email')";
	$result = mysqli_query($conn,$sql);
	$id_insert = mysqli_insert_id($conn);

	}
	header('Location: client.php');
	exit;
?>
