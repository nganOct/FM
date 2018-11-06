<?php
include('../frontend/config.php');
$sql="select * from user order by user_id";
$run = mysqli_query($conn,$sql);

/*
 }elseif(isset($_POST['sua'])){
	//sua
	$sql = "update member set username='$username', password = '$password' ,address='$address', email = '$email', fullname = '$fullname' , gender = '$gender' where u_id = '$id'";
	mysqli_query($conn,$sql);
	header('location:../../index.php?manage=quanlykhachhang&ac=sua&id='.$id);
}*/
//if{
	/*if (isset ($_GET['manage'])){
		$tam = $_GET['manage'];
	}else{
		$tam = '';
	}
	if($tam == 'quanlyloaisp'){
		include ('module/quanlyloaisanpham/main.php');

	//xooa
	$sql="delete from user where user_id='$id'";
	mysqli_query($conn,$sql);
	header('location: ../../index.php?manage=quanlykhachhang&ac=them');

//}
*/
?>
<!DOCTYPE HTML>
<html>
<head>
	<?php include("header.php")?>
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
							<h2>User Management</h2>
						</div>
							
						<div class="tab-content tab-content-in">
							<div class="mailbox-border">
								<table id="customers">
									<tr>
										<th></th>
										<th>Username</th>
										<th>Password</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Address</th>
										<th colspan="2">Options</th>
									</tr>

									<?php while ($dong = mysqli_fetch_array($run, MYSQLI_ASSOC)){  ?>
										<tr>
											<td><?php echo $dong['user_id'] ?></td>
											<td><?php echo $dong['username'] ?></td>
											<td><?php echo $dong['password'] ?></td>
											<td><?php echo $dong['email'] ?></td>
											<td><?php echo $dong['phone'] ?></td>
											<td><?php echo $dong['address'] ?></td>
											<td class="hidden-xs">
												<a href="#"><i class="fa fa-pencil-square-o"></i></a>
											</td>
											<td class="hidden-xs">
												<a href="#warning"><i class="fa fa-trash-o"></i></a>
											</td>
										<?php } ?>
									</tr>
								</table>
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
</body>
</html>




