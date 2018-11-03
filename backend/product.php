<!DOCTYPE HTML>
<html>
<head>
	<?php include("header.php")?>
</head>
<body>	
	<div class="page-container">	
		<div class="left-content">
			<div class="mother-grid-inner">
				<!--header start here-->
				<?php include("headmenu.php") ?>
				<!--heder end here-->
				<!-- script-for sticky-nav -->
				<script>
					$(document).ready(function() {
						var navoffeset=$(".header-main").offset().top;
						$(window).scroll(function(){
							var scrollpos=$(window).scrollTop(); 
							if(scrollpos >=navoffeset){
								$(".header-main").addClass("fixed");
							}else{
								$(".header-main").removeClass("fixed");
							}
						});

					});
				</script>
				<!-- /script-for sticky-nav -->
				<!--inner block start here-->
				<div class="inner-block">
					<div class="product-block">
						<div class="pro-head">
							<h2>Products</h2>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro1.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro1.jpg" alt="">
								</div>
								<div class="produ-cost">
									<h4>Temporibus autem</h4>
									<h5>256 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro2.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro2.jpg" alt="">
								</div>
								<div class="produ-cost">
									<h4>Temporibus autem</h4>
									<h5>156 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro3.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro3.jpg" alt="">
								</div>
								<div class="produ-cost">
									<h4>Temporibus autem</h4>
									<h5>500 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro4.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro4.jpg" alt="">
								</div>
								<div class="produ-cost">
									<h4>Temporibus autem</h4>
									<h5>188 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro5.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro5.jpg" alt="">
								</div>
								<div class="produ-cost">
									<h4>Temporibus autem</h4>
									<h5>220 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro6.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro6.jpg" alt="">
								</div>
								<div class="produ-cost">
									<h4>Temporibus autem</h4>
									<h5>160 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro7.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro7.jpg" alt="">
								</div>
								<div class="produ-cost">
									<h4>Temporibus autem</h4>
									<h5>350 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro8.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro8.jpg" alt="">
								</div>
								<div class="produ-cost">
									<h4>Temporibus autem</h4>
									<h5>500 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro9.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro9.jpg" alt="">
								</div>
								<div class="produ-cost">
									<h4>Temporibus autem</h4>
									<h5>256 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro10.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro10.jpg" alt="">
								</div>
								<div class="produ-cost">
									<h4>Temporibus autem</h4>
									<h5>548 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro3.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro3.jpg" alt="">
								</div>
								<div class="produ-cost">
									<h4>Temporibus autem</h4>
									<h5>390 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro12.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro12.jpg" alt="">
								</div>
								<div class="produ-cost">
									<h4>Temporibus autem</h4>
									<h5>150 $</h5>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!--inner block end here-->
				<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
				<script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
				<script type="text/javascript">
					$(document).ready(function(){
						$('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
					});
				</script>

				<!--copy rights start here-->
				<?php include("footer.php") ?>
			</div>
		</div>
		<!--slider menu-->
		<div class="sidebar-menu">
			<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
				<!--<img id="logo" src="" alt="Logo"/>--> 
			</a> </div>		  
			<?php include("menu.php") ?>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--slide bar menu end here-->
	<script>
		var toggle = true;

		$(".sidebar-icon").click(function() {                
			if (toggle)
			{
				$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
				$("#menu span").css({"position":"absolute"});
			}
			else
			{
				$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
				setTimeout(function() {
					$("#menu span").css({"position":"relative"});
				}, 400);
			}               
			toggle = !toggle;
		});
	</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="js/bootstrap.js"> </script>
	<!-- mother grid end here-->
</body>
</html>




