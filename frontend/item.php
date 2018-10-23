<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Product</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
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
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="new.html">New Arrivals</a>
						</li>
						<li>
							<a href="mens.html">Sale Items</a>
						</li>
						<li>
							<a href="womens.html">About</a>
						</li>
						<li>
							<a href="faq.html">Faq</a>
						</li>
					</ul>
					<ul id="secondary">
						<li>
							<a href="checkout.html">Cart</a>
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
							<img src="images/product2.jpg" alt="view" width="317" margin-top=>
						</div>
					</div>
					<div class="section">
						<h2><span>$8.50</span>Hukbalahap Boots</h2>
						<p>
							. Nam at ipsum in urna convallis accumsan. Nullam at
						</p>
						<form action="index.html" method="post">
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
				<?php include 'comment/comment.php' ?>
				</div>
				<div class="footer">
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
				<div class="footer">
					<h4><span>Comments</span></h4>
					<ul class="items">
						<li>
							<a href="product.php"> <img src="images/boots-brown.jpg" alt="Img"> <span>$8.50</span> Hukbalahap Boots</a>
						</li>
						<li>
							<a href="product.php"> <img src="images/boots-violet.jpg" alt="Img"> <span>$8.50</span> Hukbalahap Boots</a>
						</li>
						<li>
							<a href="product.php"> <img src="images/boots-yellow.jpg" alt="Img"> <span>$8.50</span> Hukbalahap Boots</a>
						</li>
						<li>
							<a href="product.php"> <img src="images/boots-green.jpg" alt="Img"> <span>$8.50</span> Hukbalahap Boots</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="footer">
				<div class="background">
					<div id="connect">
						<h5>Get Social With us!</h5>
						<ul>
							<li>
								<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a>
							</li>
							<li>
								<a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a>
							</li>
							<li>
								<a href="http://www.freewebsitetemplates.com/go/googleplus/" target="_blank" class="linkin"></a>
							</li>
						</ul>
					</div>
					<ul class="navigation">
						<li>
							<h5>Vegetable</h5>
							<a href="mens.html">Tomato</a> <a href="mens.html">Potato</a> <a href="mens.html">Mint</a> <a href="mens.html">Egg plant</a>
						</li>
						<li>
							<h5>Sea food</h5>
							<a href="womens.html">Fish</a> <a href="womens.html">Octopus</a> <a href="womens.html">Srimp</a> <a href="womens.html">Squid</a>
						</li>
						<li class="latest">
							<h5>New Arrivals</h5>
							<a href="new.html">Carrot</a> <a href="new.html">Pea nuts</a> <a href="new.html">Cucumber</a> <a href="new.html">Apple</a>
						</li>
						<li class="latest">
							<h5>On Sale Items</h5>
							<a href="sale.html">Popcorn</a> <a href="sale.html">Orange</a> <a href="sale.html">Egg</a> <a href="sale.html">Onion</a>
						</li>
					</ul>
					<p class="footnote">
						&copy; Copyirght &copy; 2011. <a href="index.html">Company name</a> all rights reserved.
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>