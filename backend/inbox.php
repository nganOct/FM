<!DOCTYPE HTML>
<html>
<head>
	<?php include("header.php") ?>
</head>
<body>	
	<div class="page-container">	
		<div class="left-content">
			<div class="mother-grid-inner">
				<!--header start here-->
				<?php include("headmenu.php") ?>
			</div>
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
				<div class="inbox">
					<h2>Inbox</h2>
					<div class="col-md-4 compose">   	 	
						<div class="mail-profile">
							<div class="mail-pic">
								<a href="#"><img src="images/b3.png" alt=""></a>
							</div>
							<div class="mailer-name"> 			
								<h5><a href="#">Admin</a></h5>  	 				
								<h6><a href="mailto:info@example.com">admin@gmail.com</a></h6>   
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="compose-bottom">
							<nav class="nav-sidebar">
								<ul class="nav tabs">
									<li class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-inbox"></i>All<span>9</span><div class="clearfix"></div></a></li>
									<li class=""><a href="#tab3" data-toggle="tab"><i class="fa fa-star-o"></i>Checked<span>3</span></a></li> 
									<li class=""><a href="#tab4" data-toggle="tab"><i class="fa fa-pencil-square-o"></i>Unchecked<span>6</span><div class="clearfix"></div></a></li>                            
								</ul>
							</nav>
						</div>
					</div>
					<div class="col-md-8 mailbox-content  tab-content tab-content-in">
						<div class="tab-pane active text-style" id="tab1">
							<div class="mailbox-border">
								<div class="mail-toolbar clearfix">
								</div>
								<table class="table tab-border">
									<tbody>
										<tr class="unread checked">
											<td class="hidden-xs">
												<a href="#"><i class="fa fa-trash-o"></i></a>
											</td>
											<td class="hidden-xs">
												<i class="fa fa-star icon-state-warning"> </i>
											</td>
											<td class="hidden-xs">
												Google
											</td>
											<td>
												Lorem Ipsum is simply
											</td>
											<td>
											</td>
											<td>
												12 march
											</td>
										</tr>
										<tr class="unread checked">
											<td class="hidden-xs">
												<a href="#"><i class="fa fa-trash-o"></i></a>
											</td>
											<td class="hidden-xs">
												<i class="fa fa-star icon-state-warning"></i>
											</td>
											<td class="hidden-xs">
												Dropbox
											</td>
											<td>
												Consectetuer adipiscing elit

											</td>
											<td>
											</td>
											<td>
												02 march
											</td>
										</tr>
										<tr class="read checked">
											<td class="hidden-xs">
												<a href="#"><i class="fa fa-trash-o"></i></a>
											</td>
											<td class="hidden-xs">
												<i class="fa fa-star"></i>
											</td>
											<td class="hidden-xs">
												Microsoft
											</td>
											<td>
												Nemo enim ipsam voluptatem
											</td>
											<td>
											</td>
											<td>
												1 march
											</td>
										</tr>
									</tbody>
								</table>
							</div>   
						</div>
						<div class="tab-pane text-style" id="tab3">
							<div class="mailbox-border">
								<div class="mail-toolbar clearfix">
								</div>
								<table class="table tab-border">
									<tbody>
										<tr class="unread checked">
											<td class="hidden-xs">
												<a href="#"><i class="fa fa-trash-o"></i></a>
											</td>
											<td class="hidden-xs">
												<i class="fa fa-star icon-state-warning"> </i>
											</td>
											<td class="hidden-xs">
												Google
											</td>
											<td>
												Lorem Ipsum is simply
											</td>
											<td>
											</td>
											<td>
												12 march
											</td>
										</tr>
										<tr class="unread checked">
											<td class="hidden-xs">
												<a href="#"><i class="fa fa-trash-o"></i></a>
											</td>
											<td class="hidden-xs">
												<i class="fa fa-star icon-state-warning"></i>
											</td>
											<td class="hidden-xs">
												Dropbox
											</td>
											<td>
												Consectetuer adipiscing elit

											</td>
											<td>
											</td>
											<td>
												02 march
											</td>
										</tr>
										<tr class="read checked">
											<td class="hidden-xs">
												<a href="#"><i class="fa fa-trash-o"></i></a>
											</td>
											<td class="hidden-xs">
												<i class="fa fa-star"></i>
											</td>
											<td class="hidden-xs">
												Microsoft
											</td>
											<td>
												Nemo enim ipsam voluptatem
											</td>
											<td>
											</td>
											<td>
												1 march
											</td>
										</tr>
									</tbody>
								</table>
							</div>   
						</div>
						<div class="tab-pane text-style" id="tab4">
							<div class="mailbox-border">
								<div class="mail-toolbar clearfix">

								</div>
								<table class="table tab-border">
									<tbody>
										<tr class="unread checked">
											<td class="hidden-xs">
												<a href="#"><i class="fa fa-trash-o"></i></a>
											</td>
											<td class="hidden-xs">
												<i class="fa fa-star icon-state-warning"> </i>
											</td>
											<td class="hidden-xs">
												Google
											</td>
											<td>
												Lorem Ipsum is simply
											</td>
											<td>
											</td>
											<td>
												12 march
											</td>
										</tr>
										<tr class="unread checked">
											<td class="hidden-xs">
												<a href="#"><i class="fa fa-trash-o"></i></a>
											</td>
											<td class="hidden-xs">
												<i class="fa fa-star icon-state-warning"></i>
											</td>
											<td class="hidden-xs">
												Dropbox
											</td>
											<td>
												Consectetuer adipiscing elit

											</td>
											<td>
											</td>
											<td>
												02 march
											</td>
										</tr>
										<tr class="read checked">
											<td class="hidden-xs">
												<a href="#"><i class="fa fa-trash-o"></i></a>
											</td>
											<td class="hidden-xs">
												<i class="fa fa-star"></i>
											</td>
											<td class="hidden-xs">
												Microsoft
											</td>
											<td>
												Nemo enim ipsam voluptatem
											</td>
											<td>
											</td>
											<td>
												1 march
											</td>
										</tr>
									</tbody>
								</table>
							</div>   
						</div>

					</div>
					<div class="clearfix"> </div>     
				</div>
			</div>

			<!--inner block end here-->
			<!--copy rights start here-->
			<?php include("footer.php") ?>
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




