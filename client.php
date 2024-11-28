<?php
	include("connect.php");
	$result = mysqli_query($conn, "SELECT * FROM `TClient`");
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/reset.css">
	<link rel="stylesheet" href="/css/main.css">
	<title>Document</title>
</head>
<body>
	<nav class="nav">
		<div class="container1">
				<div class="nav-row">
						<a href="./index.html" class="logo"><strong>CRM</strong></a>

						<ul class="nav-list">
							<li class="nav-list__item"><a href="./index.php" class="nav-list__link nav-list__link--active">Клиенты</a></li>
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
				<a href="./form-client.php" class="btn-link"><button class="btn">Добавить клиента</button></a>
			</div>
			<div class="main-block">
			 
				<div class="table">
				    
					<ul class="chart">
					     <li>№</li>
							<li>Имя</li>
							<li>Телефон</li>
							<li>Email</li>
							<li class="hidden"><input type="hidden" class="hidden"></li>
						<?php 
							while($client = mysqli_fetch_assoc($result)){
								?>
								    <li><?php	echo $client['fid_client'];?></li>
									<li><?php	echo $client['fFIO'];?></li>
									<li><?php	echo $client['fPhone_number'];?></li>
									<li><?php	echo $client['fEmail'];?></li>
									<li>
									    <a href="./update.php?id=<?=$client['fid_client']?>"><input type="submit" name="button" value="Изменить" class="btn"></a>
									    <a href="./delete.php?id=<?=$client['fid_client']?>"><button class="chart-btn btn-delete"><img src="/delete_icon.svg" alt="delete" class="icon"></button></a>
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