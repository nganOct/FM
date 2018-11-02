<div class="left"> 
	<?php
	if(isset($_GET['ac']) ){
		$tam=$_GET['ac'];
	}else{
		$tam='';
	}if($tam=='them'){
		include('module/quanlythanhtoan/them.php');
	}if($tam=='sua'){
		include('module/quanlythanhtoan/sua.php');
	}
	?>
</div>
<div class="right">
<?php
	include('module/quanlythanhtoan/lietke.php');
	?>
</div>