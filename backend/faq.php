
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
							<h2>FAQ</h2>
						</div>
							
							<div class="col-md-10" id="content-wrapper">
				<div class="row">
					<div class="col-lg-12">
						
						<h1>FAQ</h1>
						<div class="row">
							<div class="col-lg-12">
								<div class="main-box clearfix" style="min-height: 900px;">
									
									
									<div class="tabs-wrapper">
										<ul class="nav nav-tabs">
											<li class="active"><a href="#tab-home" data-toggle="tab">General</a></li>
											<li><a href="#tab-accounts" data-toggle="tab">Accounts</a></li>
											<li class="dropdown">
												<a class="dropdown-toggle" data-toggle="dropdown" href="#">
													Technical <span class="caret"></span>
												</a>
												<ul class="dropdown-menu" role="menu">
													<li><a href="#tab-configuration" data-toggle="tab">Configuration</a></li>
													<li><a href="#tab-configuration" data-toggle="tab">Voice</a></li>
													<li class="divider"></li>
													<li><a href="#tab-configuration" data-toggle="tab">Messaging</a></li>
												</ul>
											</li>
										</ul>
										
										<div class="tab-content">
											<div class="tab-pane fade in active" id="tab-home">
												
												<h3><span>General information</span></h3>
												<div class="panel-group accordion" id="accordion">
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
																	<i class="fa fa-cloud"></i> What is a good example of a Superhero application?
																</a>
															</h4>
														</div>
														<div id="collapseOne" class="panel-collapse collapse">
															<div class="panel-body">
																Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.
																<br/>
																<br/>
																Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, 'cause I'll kill the motherfucker, know what I'm sayin'? 
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
																	<i class="fa fa-gavel"></i> What can I build with Superhero?
																</a>
															</h4>
														</div>
														<div id="collapseTwo" class="panel-collapse collapse">
															<div class="panel-body">
																Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb.
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
																	<i class="fa fa-building-o"></i> Do you have any pre-built applications using Superhero?
																</a>
															</h4>
														</div>
														<div id="collapseThree" class="panel-collapse collapse">
															<div class="panel-body">
																Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing.
															</div>
														</div>
													</div>
												</div>
												
												<h3><span>Billing information</span></h3>
												<div class="panel-group accordion" id="accordion4">
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapseOne4">
																	<i class="fa fa-btc"></i> How does Superhero’s pricing work?
																</a>
															</h4>
														</div>
														<div id="collapseOne4" class="panel-collapse collapse">
															<div class="panel-body">
																Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.
																<br/>
																<br/>
																Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, 'cause I'll kill the motherfucker, know what I'm sayin'? 
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapseTwo4">
																	<i class="fa fa-coffee"></i> What happens if my Superhero account balance reaches zero?
																</a>
															</h4>
														</div>
														<div id="collapseTwo4" class="panel-collapse collapse">
															<div class="panel-body">
																Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb.
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapseThree4">
																	<i class="fa fa-credit-card"></i> When does volume pricing kick in?
																</a>
															</h4>
														</div>
														<div id="collapseThree4" class="panel-collapse collapse">
															<div class="panel-body">
																Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing.
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapseFour4">
																	<i class="fa fa-flask"></i> How do I set a recharge trigger?
																</a>
															</h4>
														</div>
														<div id="collapseFour4" class="panel-collapse collapse">
															<div class="panel-body">
																Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing.
															</div>
														</div>
													</div>
												</div>
												
												
											</div>
											<div class="tab-pane fade" id="tab-accounts">
												
												<h3><span>Accounts information</span></h3>
												<div class="panel-group accordion" id="accordion2">
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2">
																	What is a subaccount?
																</a>
															</h4>
														</div>
														<div id="collapseOne2" class="panel-collapse collapse">
															<div class="panel-body">
																Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.
																<br/>
																<br/>
																Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, 'cause I'll kill the motherfucker, know what I'm sayin'? 
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2">
																	How do I cancel my account?
																</a>
															</h4>
														</div>
														<div id="collapseTwo2" class="panel-collapse collapse">
															<div class="panel-body">
																Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb.
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
																	Where are my test credentials?
																</a>
															</h4>
														</div>
														<div id="collapseThree2" class="panel-collapse collapse">
															<div class="panel-body">
																Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing.
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour2">
																	Can I change the name of my account?
																</a>
															</h4>
														</div>
														<div id="collapseFour2" class="panel-collapse collapse">
															<div class="panel-body">
																Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb.
															</div>
														</div>
													</div>
												</div>

											</div>
											<div class="tab-pane fade" id="tab-configuration">
												
												<h3><span>Technical information</span></h3>
												<div class="panel-group accordion" id="accordion3">
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapseOne3">
																	How do I protect unauthorized access to my media on Superhero?
																</a>
															</h4>
														</div>
														<div id="collapseOne3" class="panel-collapse collapse">
															<div class="panel-body">
																Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.
																<br/>
																<br/>
																Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, 'cause I'll kill the motherfucker, know what I'm sayin'? 
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapseTwo3">
																	Which IP addresses will Superhero’s requests come from?
																</a>
															</h4>
														</div>
														<div id="collapseTwo3" class="panel-collapse collapse">
															<div class="panel-body">
																Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb.
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree3">
																	What are Superhero’s business hours for support?
																</a>
															</h4>
														</div>
														<div id="collapseThree3" class="panel-collapse collapse">
															<div class="panel-body">
																Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing.
															</div>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>	<!--inner block end here-->
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



