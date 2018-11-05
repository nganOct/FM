<!DOCTYPE HTML>
<html>
<head>
	<?php include("header.php") ?>
</head>
<style type="text/css">
#customers {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	border-collapse: collapse;
	width: 100%;
}

#customers td, #customers th {
	border: 1px solid #ddd;
	padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
	padding-top: 12px;
	padding-bottom: 12px;
	text-align: left;
	background-color: #4CAF50;
	color: white;
}	
</style>
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
					<h2>User Management</h2>
					<div class="col-md-6 compose">
						<br>   	 	
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
									<li class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-inbox"></i>All<div class="clearfix"></div></a></li>
									<li class=""><a href="#" data-toggle="tab"><i class="fa fa-star-o"></i>Checked<span>3</span></a></li> 
									<li class=""><a href="#" data-toggle="tab"><i class="fa fa-pencil-square-o"></i>Unchecked<span>6</span><div class="clearfix"></div></a></li>                            
								</ul>
							</nav>
						</div>
					</div>
					<div class="mailbox-content  tab-content tab-content-in">
						<div class="tab-pane text-style" id="tab1">
							<div class="mailbox-border">
								<div class="mail-toolbar clearfix">
								</div>
								<table id="customers">
									<tr>
										<th>Usernam</th>
										<th>Password</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Address</th>
										<th colspan="2">Options</th>
									</tr>
									<tr>
										
										<td>Alfreds Futterkiste</td>
										<td>Maria Anders</td>
										<td>Germany</td>
										<td></td>
										<td></td>
										<td class="hidden-xs">
											<a href="#"><i class="fa fa-pencil-square-o"></i></a>
										</td>
										<td class="hidden-xs">
											<a href="#"><i class="fa fa-trash-o"></i></a>
										</td>
									</tr>
									<tr>
										<td>Berglunds snabbköp</td>
										<td>Christina Berglund</td>
										<td>Sweden</td>
										<td class="hidden-xs">
											<a href="#"><i class="fa fa-pencil-square-o"></i></a>
										</td>
										<td class="hidden-xs">
											<a href="#"><i class="fa fa-trash-o"></i></a>
										</td>
									</tr>
									<tr>
										<td>Centro comercial Moctezuma</td>
										<td>Francisco Chang</td>
										<td>Mexico</td>
									</tr>
									<tr>
										<td>Ernst Handel</td>
										<td>Roland Mendel</td>
										<td>Austria</td>
									</tr>
									<tr>
										<td>Island Trading</td>
										<td>Helen Bennett</td>
										<td>UK</td>
									</tr>
									<tr>
										<td>Königlich Essen</td>
										<td>Philip Cramer</td>
										<td>Germany</td>
									</tr>
									<tr>
										<td>Laughing Bacchus Winecellars</td>
										<td>Yoshi Tannamuri</td>
										<td>Canada</td>
									</tr>
									<tr>
										<td>Magazzini Alimentari Riuniti</td>
										<td>Giovanni Rovelli</td>
										<td>Italy</td>
									</tr>
									<tr>
										<td>North/South</td>
										<td>Simon Crowther</td>
										<td>UK</td>
									</tr>
									<tr>
										<td>Paris spécialités</td>
										<td>Marie Bertrand</td>
										<td>France</td>
									</tr>
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
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="js/bootstrap.js"> </script>
	<!-- mother grid end here-->
</body>
</html>




