<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Product</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="index.html"><img src="images/fam.png" alt="LOGO"></a>
				</div>
				<div id="navigation">
					<ul id="primary">
						<li >
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
							<a href="sale.php">Sales</a>
						</li>
						<li>
							<a href="news/news.php">Promotions</a>
						</li>
						<li>
							<a href="about.php">About</a>
						</li>
					</ul>
					<ul id="secondary">
						<li>
							<a href="checkout.php">Cart</a>
						</li>
						<li>
							<a href="login/login.php">Login</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="contents">
				<div id="product">
					<div class="section">
						<div>
							<img src="images/product2.jpg" alt="view" width="360" margin-top=>
						</div>
					</div>
					<div class="section">
						<h2><span>$8.50</span>Hukbalahap Boots</h2>
						<p>
							. Nam at ipsum in urna convallis accumsan. Nullam at
							bbbbbbbbbbbbbbbbbb
							bbbbbbbbbbbbbbb
							bbbbbbbbbbbbbbbbbbbbb
							bbbbbbbbbbbbb
						</p>				
			            <h5 style="font-size: 16px; color: #636a86; font-weight: 700 ">Category: <?php ?></h5>
			            <h5 style="font-size: 16px; color: #636a86; font-weight: 700; padding-top: 5px ">Manufacturer: <?php ?></h5>
						<form action="index.php" method="post">
							<label for="">Size: </label>
							<select>			
								<option>S</option>
								<option value="">M</option>
								<option value="">L</option>
							</select>
							<label for="">Quantity: </label>
							<select>
								<option>1</option>
								<option value="">2</option>
							</select>
							<input type="submit" value="Add to Cart" class="btn-cart">
							<input type="submit" value="Add to Wishlist">
						</form>
					</div>
				</div>
				<div class="footer">
					<h4><span>Comments</span></h4>
					<?php include 'comment/comment.php' ?>
					<h4><span>Leave a Comment</span></h4>
					<form action="comment.php" method="post">
						<div class="form-group col-xs-10" style="margin-left: 50px">
							<label for="title">Title:</label>
							<textarea class="form-control" rows="1" id="title" required></textarea>
						</div>
						<div class="form-group col-xs-10" style="margin-left: 50px">
							<label for="content">Comment:</label>
							<textarea class="form-control" rows="5" id="content" required></textarea>
						</div>
						<button type="submit" class="btn btn-primary" style="margin-left: 425px;">Submit</button>
					</form>
					<br>
					<h4><span>Similar Items</span></h4>
					<ul class="items">
						<li>
							<a href="product.html"> <img src="images/boots-brown.jpg" alt="Img"> <span>$8.50</span> Hukbalahap Boots</a>
						</li>
						<li>
							<a href="product.html"> <img src="images/boots-violet.jpg" alt="Img"> <span>$8.50</span> Hukbalahap Boots</a>
						</li>
						<li>
							<a href="product.html"> <img src="images/boots-yellow.jpg" alt="Img"> <span>$8.50</span> Hukbalahap Boots</a>
						</li>
						<li>
							<a href="product.html"> <img src="images/boots-green.jpg" alt="Img"> <span>$8.50</span> Hukbalahap Boots</a>
						</li>
					</ul>
				</div>
			</div>
			<?php include ("footer.php")?>				
		</div>
	</div>
</div>
</body>
</html>