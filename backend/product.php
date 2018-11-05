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
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro21.png"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro21.png" alt="">
								</div>
								<div class="produ-cost">
									<h4>Swing Chips</h4>
									<h5>7 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro22.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro22.jpg" alt="">
								</div>
								<div class="produ-cost">
									<h4>Oshi Chili Flavor</h4>
									<h5>5 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro19.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro19.jpg" alt="">
								</div>
								<div class="produ-cost">
									<h4>Kinh Do Bread</h4>
									<h5>5 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro31.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro31.jpg" alt="">
								</div>
								<div class="produ-cost">
									<h4>Ginger Remove Water</h4>
									<h5>22 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro30.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro30.jpg" alt="">
								</div>
								<div class="produ-cost">
									<h4>Ajimonoto</h4>
									<h5>10 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro29.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro29.jpg" alt="">
								</div>
								<div class="produ-cost">
									<h4>Neptune Oil</h4>
									<h5>22 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro28.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro28.jpg" alt="">
								</div>
								<div class="produ-cost">
									<h4>Choco Koko</h4>
									<h5>10 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro27.png"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro27.png" alt="">
								</div>
								<div class="produ-cost">
									<h4>Hai Chau Salt</h4>
									<h5>5 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro26.png"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro26.png" alt="">
								</div>
								<div class="produ-cost">
									<h4>Bioderma</h4>
									<h5>25 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro25.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro25.jpg" alt="">
								</div>
								<div class="produ-cost">
									<h4>Simple Toner</h4>
									<h5>28 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro24.png"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro24.png" alt="">
								</div>
								<div class="produ-cost">
									<h4>Thayers Toner</h4>
									<h5>30 $</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 product-grid">
							<div class="product-items">
								<div class="project-eff">
									<div id="nivo-lightbox-demo"> <p> <a href="images/pro23.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
									<img class="img-responsive" src="images/pro23.jpg" alt="">
								</div>
								<div class="produ-cost">
									<h4>Bimbim Toonies</h4>
									<h5>7 $</h5>
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




