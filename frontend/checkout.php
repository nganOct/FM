<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Checkout - Family Mart</title>
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
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="#">Products</a>
							<ul class="sub-menu">
				        		<li><a class= "small" href="newarrivals.php">New Arrivals</a></li>
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

			<div id="contents">
				<div id="checkout">
					<h4><span>Checkout</span></h4>
					<table>
						<thead>
							<tr>
								<th>Order no. 0017893547</th>
								<th>Quantity</th>
								<th>Size</th>
								<th>Price</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><img src="images/leather-boots3.jpg" alt="Thumbnail"> <b>Hukbalahap Boots</b>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis cursus gravida. Suspendisse ut ligula tristique velit blandit blandit vel sit amet ipsum. Nam accumsan turpid id mauris fermentum
									</p></td>
								<td><a href="checkout.php" class="minus"></a> <a href="checkout.php" class="plus"></a>
									<input type="text" value="1" class="txtfield"></td>
								<td><a href="checkout.php" class="minus"></a> <a href="checkout.php" class="plus"></a>
									<input type="text" value="7.5" class="txtfield"></td>
								<td class="last"><div>
										$8.50 <a href="checkout.php">Delete</a>
									</div></td>

							</tr> 
						</tbody>
					</table>
					<span>Total: ...............$</span>
					<a href="checkout.php" class="proceed-btn">Proceed to Checkout</a>
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
							<h5>Mens</h5>
							<a href="mens.html">Sneakers</a> <a href="mens.html">Boots</a> <a href="mens.html">Winter socks</a> <a href="mens.html">Lace-ups</a>
						</li>
						<li>
							<h5>Womens</h5>
							<a href="womens.html">Sneakers</a> <a href="womens.html">Boots</a> <a href="womens.html">Winter socks</a> <a href="womens.html">Lace-ups</a>
						</li>
						<li class="latest">
							<h5>New Arrivals</h5>
							<a href="new.html">Cheverlyn Zespax</a> <a href="new.html">Alta Ulterior</a> <a href="new.html">Mikee</a> <a href="new.html">Jeeroks Copy</a>
						</li>
						<li class="latest">
							<h5>On Sale Items</h5>
							<a href="sale.html">Cheverlyn Zespax</a> <a href="sale.html">Alta Ulterior</a> <a href="sale.html">Mikee</a> <a href="sale.html">Jeeroks Copy</a>
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