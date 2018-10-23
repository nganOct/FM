<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" href="frontend/css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="index.php"><img src="frontend/images/fam.png" alt="LOGO"></a>
				</div>
				<div id="navigation">
					<ul id="primary">
						<li class="selected">
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="frontend/new.php">Products</a>
						</li>
						<li>
							<a href="frontend/sale.php">Sales</a>
						</li>
						<li>
							<a href="frontend/news/news.php">Promotions</a>
						</li>
						<li>
							<a href="frontend/about.php">About</a>
						</li>
					</ul>
					<ul id="secondary">
						<li>
							<a href="frontend/checkout.php">Cart</a>
						</li>
						<li>
							<a href="frontend/login/login.php">Login</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="contents">
				<div id="adbox">
					<div id="search">
						<h3>Search products</h3>
						<p>
							
						</p>
						<form action="index.php" method="post">
							<ul>
								<li>
									<select id="size">
										<label for=""></label>
										<option>Search by manufacturer</option>
									</select>
								</li>
								<li>
									<select id="color">
										<label for="">Search for category</label>
										<option>Search for category</option>
									</select>
								</li>
								<li>
									<select id="brand">
										<option>Search by product name</option>
									</select>
								</li>
								<li>
									<select id="style">
										<option>Search by price</option>
									</select>
								</li>
							</ul>
							<input type="submit" value="Search" class="button">
						</form>
					</div>
					<img src="frontend/images/bground.jpg" height="424" width="730" class="background" alt="Promo"> <a href="index.php" class="button"></a> <span></span>
				</div>
				<div id="main">
					<div id="featured">
						<h4><span>Featured products</span></h4>
						<ul class="items">
							<li>
								<a href="fontend/product.php"> <img src="frontend/images/ss12.PNG" alt="Img"> <span>$19.50</span> Gạo nàng hoa </a>
							</li>
							<li>
								<a href="fontend/product.php"> <img src="frontend/images/ss13.PNG" alt="Img"> <span>$19.50</span> Cheverlyn Zespax </a>
							</li>
							<li>
								<a href="fontend/product.php"> <img src="frontend/images/michinh.jpg" alt="Img"> <span>$19.50</span> Cheverlyn Zespax </a>
							</li>
							<li>
								<a href="fontend/product.php"> <img src="frontend/images/ss13.PNG" alt="Img"> <span>$19.50</span> Cheverlyn Zespax </a>
							</li>
						</ul>
					</div>
					<div id="sale">
						<h4><span>Sale Items</span></h4>
						<ul class="items">
							<li>
								<a href="fontend/product.php"> <img src="frontend/images/ss12.PNG" alt="Img"> <span>$8.50</span> Hukbalahap Boots </a>
							</li>
							<li>
								<a href="fontend/product.php"> <img src="frontend/images/ss12.PNG" alt="Img"> <span>$8.50</span> Hukbalahap Boots </a>
							</li>
							<li>
								<a href="fontend/product.php"> <img src="frontend/images/ss12.PNG" alt="Img"> <span>$8.50</span> Hukbalahap Boots </a>
							</li>
							<li>
								<a href="fontend/product.php"> <img src="frontend/images/product1.png" alt="Img"> <span>$8.50</span> Hukbalahap Boots </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php include 'frontend/footer.php'?>
</html>