<?php
include('../config.php');
$id = $_GET['id'];
$username =$_POST['username'];
$password = $_POST['password'];
$address = $_POST['address'];
$email = $_POST['email'];
$fullname = $_POST['fullname'];
$gender = $_POST['gender'];
 $password = md5(($_POST["password"]));
if(isset($_POST['them'])){
	//them
	$sql="INSERT INTO member (username, password, address, email, fullname, gender) values ('$username','$password', '$address', '$email', '$fullname', '$gender')";
	var_dump($sql);
	if(!mysqli_query($conn,$sql)){
		die ('Error Connection' );
	}
	header('location: ../../index.php?manage=quanlykhachhang&ac=them'); //quay lai trang
}elseif(isset($_POST['sua'])){
	//sua
	$sql = "update member set username='$username', password = '$password' ,address='$address', email = '$email', fullname = '$fullname' , gender = '$gender' where u_id = '$id'";
	mysqli_query($conn,$sql);
	header('location:../../index.php?manage=quanlykhachhang&ac=sua&id='.$id);
}
 
else{
	//xoa3
	$sql="delete from member where u_id='$id'";
	mysqli_query($conn,$sql);
	header('location: ../../index.php?manage=quanlykhachhang&ac=them');
}
?>