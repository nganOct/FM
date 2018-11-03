
<?php include("header.php") ?>
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
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
					<!--market updates updates-->
					<div class="market-updates">
						<div class="col-md-4 market-update-gd">
							<div class="market-update-block clr-block-1">
								<div class="col-md-8 market-update-left">
									<h3>83</h3>
									<h4>Registered User</h4>
									<p>Other hand, we denounce</p>
								</div>
								<div class="col-md-4 market-update-right">
									<i class="fa fa-file-text-o"> </i>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-4 market-update-gd">
							<div class="market-update-block clr-block-2">
								<div class="col-md-8 market-update-left">
									<h3>135</h3>
									<h4>Daily Products</h4>
									<p>Other hand, we denounce</p>
								</div>
								<div class="col-md-4 market-update-right">
									<i class="fa fa-eye"> </i>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-4 market-update-gd">
							<div class="market-update-block clr-block-3">
								<div class="col-md-8 market-update-left">
									<h3>23</h3>
									<h4>New Messages</h4>
									<p>Other hand, we denounce</p>
								</div>
								<div class="col-md-4 market-update-right">
									<i class="fa fa-envelope-o"> </i>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!--market updates end here-->

					<!--main page chart start here-->
					<br>
					<div class="main-page-charts">
						<div class="main-page-chart-layer1">
							<div class="col-md-6 chart-layer1-left"> 
								<div class="glocy-chart">
									<div class="span-2c">  
										<h3 class="tlt">Sales Analytics</h3>
										<canvas id="bar" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
										<script>
											var barChartData = {
												labels : ["Jan","Feb","Mar","Apr","May","Jun","jul"],
												datasets : [
												{
													fillColor : "#FC8213",
													data : [65,59,90,81,56,55,40]
												},
												{
													fillColor : "#337AB7",
													data : [28,48,40,19,96,27,100]
												}
												]

											};
											new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);

										</script>
									</div> 			  		   			
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<!--main page chart layer2-->
					<div class="chart-layer-2">	
						<div class="col-md-6 chart-layer2-right">
							<div class="prograc-blocks">
								<!--Progress bars-->
								<div class="home-progres-main">
									<h3>Total Sales</h3>
								</div>
								<div class='bar_group'>
									<div class='bar_group__bar thin' label='Rating' show_values='true' tooltip='true' value='343'></div>
									<div class='bar_group__bar thin' label='Quality' show_values='true' tooltip='true' value='235'></div>
									<div class='bar_group__bar thin' label='Amount' show_values='true' tooltip='true' value='550'></div>
									<div class='bar_group__bar thin' label='Farming' show_values='true' tooltip='true' value='456'></div>
								</div>
								<script src="js/bars.js"></script>

								<!--//Progress bars-->
							</div>
						</div>
						<div class="col-md-6 chart-layer2-left">
							<div class="content-main revenue">			
								<h3>Total Revenue</h3>
								<canvas id="radar" height="300" width="300" style="width: 300px; height: 300px;"></canvas>
								<script>
									var radarChartData = {
										labels : ["","","","","","",""],
										datasets : [
										{
											fillColor : "rgba(104, 174, 0, 0.83)",
											strokeColor : "#68ae00",
											pointColor : "#68ae00",
											pointStrokeColor : "#fff",
											data : [65,59,90,81,56,55,40]
										},
										{
											fillColor : "rgba(236, 133, 38, 0.82)",
											strokeColor : "#ec8526",
											pointColor : "#ec8526",
											pointStrokeColor : "#fff",
											data : [28,48,40,19,96,27,100]
										}
										]

									};
									new Chart(document.getElementById("radar").getContext("2d")).Radar(radarChartData);
								</script>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>


				</div>
				<!--inner block end here-->
				<?php include ("footer.php")?>
			</div>
		</div>
		<!--slider menu-->
		<div class="sidebar-menu">
			<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
				<!--<img id="logo" src="" alt="Logo"/>--> 
			</a> </div>
			<?php include ("menu.php") ?>		  
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