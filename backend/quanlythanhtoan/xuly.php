<?php
include('../config.php');
$id = $_GET['id'];
$fullname =$_POST['fullname'];
$createdate = $_POST['createdate'];

if(isset($_POST['them'])){
	//them
	$sql="INSERT INTO purchase (fullname, createdate) values ('$fullname','$createdate')";
	var_dump($sql);
	if(!mysqli_query($conn,$sql)){
		die ('Error Connection' );
	}
	header('location: ../../index.php?manage=quanlythanhtoan&ac=them'); //quay lai trang
}elseif(isset($_POST['sua'])){
	//sua
	$sql = "update purchase set fullname = $fullname, createdate = $createdate where purchase_id = '$id'";
	mysqli_query($conn,$sql);
	header('location:../../index.php?manage=quanlythanhtoan&ac=sua&id='.$id);
}
 
else{
	//xoa3
	$sql="delete from purchase where purchase_id='$id'";
	mysqli_query($conn,$sql);
	header('location: ../../index.php?manage=quanlythanhtoan&ac=them');
}
?>