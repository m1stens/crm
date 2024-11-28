<?php
	include("connect.php");

	$result = mysqli_query($conn, "SELECT * FROM `TProduct`");
	

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
				<a href="./form-product.php" class="btn-link"><button class="btn">Добавить товар</button></a>
			</div>
			<div class="main-block">
			<div class="table">
					<ul class="chart">
					        <li>№</li>
							<li>Комплектующие</li>
							<li>Название</li>
							<li>Количество</li>
							<li class="hidden"><input type="hidden" class="hidden"></li>
						<?php 
							while($product = mysqli_fetch_assoc($result)){
								?>
								  <li><?php	echo $product['fid_product'];?></li>
									<li><?php	echo $product['fType_product'];?></li>
									<li><?php	echo $product['fName_product'];?></li>
									<li><?php	echo $product['fAmount_product'];?></li>
									<li>
									    <a href="./update-product.php?id=<?=$product['fid_product']?>"><input type="submit" name="button" value="Изменить" class="btn"></a>
									    <a href="./delete-product.php?id=<?=$product['fid_product']?>"><button class="chart-btn btn-delete"><img src="/delete_icon.svg" alt="delete" class="icon"></button></a>
									</li>
								<?php
							}
						?>
					</ul>
					
				</div>
			</div>
		</div>
	</main>
</body>
</html>