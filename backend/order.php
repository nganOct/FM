
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
							<h2>Order Management</h2>
						</div>
							
							<div class="row">
							<div class="col-lg-12">
								<div class="main-box clearfix">
									<div class="clearfix">
										<h2 class="pull-left">Orders</h2>
										
										<div id="reportrange" class="pull-right daterange-filter">
											<i class="icon-calendar"></i>
											<span></span> <b class="caret"></b>
										</div>
									</div>

									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th><a href="#"><span>Order ID</span></a></th>
													<th><a href="#" class="desc"><span>Date</span></a></th>
													<th><a href="#" class="asc"><span>Customer</span></a></th>
													<th class="text-center"><span>Status</span></th>
													<th class="text-right"><span>Price</span></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<a href="#">#8002</a>
													</td>
													<td>
														2013/08/08
													</td>
													<td>
														<a href="#">Robert De Niro</a>
													</td>
													<td class="text-center">
														<span class="label label-success">Completed</span>
													</td>
													<td class="text-right">
														&dollar; 825.50
													</td>
												</tr>
												<tr>
													<td>
														<a href="#">#5832</a>
													</td>
													<td>
														2013/08/08
													</td>
													<td>
														<a href="#">John Wayne</a>
													</td>
													<td class="text-center">
														<span class="label label-warning">On hold</span>
													</td>
													<td class="text-right">
														&dollar; 923.93
													</td>
												</tr>
												<tr>
													<td>
														<a href="#">#2547</a>
													</td>
													<td>
														2013/08/08
													</td>
													<td>
														<a href="#">Anthony Hopkins</a>
													</td>
													<td class="text-center">
														<span class="label label-primary">Pending</span>
													</td>
													<td class="text-right">
														&dollar; 1.625.50
													</td>
												</tr>
												<tr>
													<td>
														<a href="#">#9274</a>
													</td>
													<td>
														2013/08/08
													</td>
													<td>
														<a href="#">Charles Chaplin</a>
													</td>
													<td class="text-center">
														<span class="label label-danger">Cancelled</span>
													</td>
													<td class="text-right">
														&dollar; 35.34
													</td>
												</tr>
												<tr>
													<td>
														<a href="#">#8463</a>
													</td>
													<td>
														2013/08/08
													</td>
													<td>
														<a href="#">Gary Cooper</a>
													</td>
													<td class="text-center">
														<span class="label label-success">Completed</span>
													</td>
													<td class="text-right">
														&dollar; 34.199.99
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<ul class="pagination pull-right">
										<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
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
<?php include("footer.php") ?>
<!-- this page specific inline scripts -->
	<script type="text/javascript">
	$(document).ready(function() {
		$('#reportrange').daterangepicker({
			startDate: moment().subtract('days', 29),
			endDate: moment(),
			minDate: '01/01/2012',
			maxDate: '12/31/2014',
			dateLimit: { days: 60 },
			showDropdowns: true,
			showWeekNumbers: true,
			timePicker: false,
			timePickerIncrement: 1,
			timePicker12Hour: true,
			ranges: {
				'Today': [moment(), moment()],
				'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
				'Last 7 Days': [moment().subtract('days', 6), moment()],
				'Last 30 Days': [moment().subtract('days', 29), moment()],
				'This Month': [moment().startOf('month'), moment().endOf('month')],
				'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
			},
			opens: 'left',
			buttonClasses: ['btn btn-default'],
			applyClass: 'btn-small btn-primary',
			cancelClass: 'btn-small',
			format: 'MM/DD/YYYY',
			separator: ' to ',
			locale: {
				applyLabel: 'Submit',
				fromLabel: 'From',
				toLabel: 'To',
				customRangeLabel: 'Custom Range',
				daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
				monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
				firstDay: 1
			}
		 },
		 function(start, end) {
		  console.log("Callback has been called!");
		  $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
		 }
	  );
	  //Set the initial state of the picker label
	  $('#reportrange span').html(moment().subtract('days', 29).format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
	});
	</script>
</body>
</html>




