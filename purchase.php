<?php
	include("connect.php");

	$result = mysqli_query($conn, "SELECT * FROM `TPurchase`");
	

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
				<a href="/form-purchase.php" class="btn-link"><button class="btn">Добавить покупку</button></a>
			</div>
			<div class="main-block">
			<div class="table">
					<ul class="chart1">
					        <li>№</li>
							<li>Имя</li>
							<li>Название</li>
							<li>Количество</li>
							<li>Дата</li>
							<li class="hidden"><input type="hidden" class="hidden"></li>
						<?php 
							while($purchase = mysqli_fetch_assoc($result)){
								?>
								  <li><?php	echo $purchase['fid_purchase'];?></li>
									<li><?php	echo $purchase['fFIO'];?></li>
									<li><?php	echo $purchase['fName_product'];?></li>
									<li><?php	echo $purchase['fAmount_product'];?></li>
									<li><?php	echo $purchase['fDate'];?></li>
									<li>
									    <a href="./update-purchase.php?id=<?=$purchase['fid_purchase']?>"><input type="submit" name="button" value="Изменить" class="btn"></a>
									    <a href="./delete-purchase.php?id=<?=$purchase['fid_purchase']?>"><button class="chart-btn btn-delete"><img src="/delete_icon.svg" alt="delete" class="icon"></button></a>
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