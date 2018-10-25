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
							<a href="#">Products</a>
							<ul class="sub-menu">
				        		<li><a class= "small" href="frontend/newarrivals.php">New Arrivals</a></li>
				        		<li class="inner"><a class= "small"href="#">Product Category</a>
				        			<ul>
				        				<li><a href="dairyproduct.php">Dairy Products</a></li> 
				        				<li><a href="vegetable.php">Vegetable</a></li>
				        				<li><a href="groceries.php">Groceries</a></li>
				        				<li><a href="drinks.php">Drinks</a></li>
				        				<li><a href="food.php">Processed food</a></li>
				        			</ul>
				        		</li>
				       			 <li><a class= "small" href="manufacturer.php">Manufacturers</a></li>
				     		 </ul>
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
										<input type="placeholder" value="     Product name..."> 
									
								</li>
								<li>
									<select id="color">
										<option>&nbsp &nbsp Manufacturer</option><option value="">Nestle</option>
										<option value="">Cozy</option>
										<option value="">Vinamilk</option>
										<option value="">TH True Milk</option>
										<option value="">Omachi</option>
										<option value="">KinhDo</option>
										<option value="">CocaCola</option>
										<option value="">Chinsu</option>

									</select>
								</li>
								<li>
									<select id="brand">
										<option>&nbsp &nbsp  Category</option>
										<option value="">Groceries</option>
										<option value="">Dairy products</option>
										<option value="">Processed food</option>
										<option value="">Drinks</option>
										<option value="">Vegetable</option>
									</select>
								</li>
								<li> 
									<input type="placeholder" value="     Price...">								
								</li>
							</ul>
							<input type="submit" value="Search" class="button">
						</form>
					</div>
					<img src="frontend/images/bground.jpg" height="424" width="730" style="z-index: 30;" class="background" alt="Promo"> <a href="index.php" class="button"></a> <span></span>
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