<head>
	<title>Header Menu</title>
	<?php include("header.php")?>
</head>
<body>
	<div class="header-main">
		<div class="header-left">
			<div class="logo-name">
				<a href="index.php" style="display: inline-block;"> <h1>Family Mart</h1> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				</a> 								
			</div>
			<!--search-box-->
			<div class="search-box">
				<form>
					<input type="text" placeholder="Search..." required="">	
					<input type="submit" value="">					
				</form>
			</div><!--//end-search-box-->
		</div>
		<div class="header-right">
			
			<div class="profile_details">		
				<ul>
					<li class="dropdown profile_details_drop">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<div class="profile_img">	
								<span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
								<div class="user-name">
									<p>Malorum</p>
									<span>Administrator</span>
								</div>
								<i class="fa fa-angle-down lnr"></i>
								<i class="fa fa-angle-up lnr"></i>
								<div class="clearfix"></div>	
							</div>	
						</a>
						<ul class="dropdown-menu drp-mnu">
							<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
							<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
							<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>				
		</div>
		<div class="clearfix"> </div>	
	</div>
</body>