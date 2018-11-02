
<?php
include('../config.php');
$id = $_GET['id'];
$tensp=$_POST['tensp'];
$gia=$_POST['gia'];
$thutu=$_POST['thutu'];
$hinhanh=$_FILES['hinhanh']['name'];
$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
var_dump($sql);
$mota=$_POST['motasp'];
$loaisp=$_POST['loaisp'];
$hangsp = $_POST['hangsp'];
if(isset($_POST['them'])){
	//them
	$sql="INSERT INTO product (product_name, product_image,product_price,product_order,description,cate_id,company_id) values ('$tensp','$hinhanh','$gia','$thutu','$mota','$loaisp','$hangsp')";
	var_dump($sql);
	if(!mysqli_query($conn,$sql)){
		die ('Error Connection' );
	}
	header('location: ../../index.php?manage=quanlychitietsp&ac=them'); //quay lai trang
}elseif(isset($_POST['sua'])){
	//sua
	if($hinhanh=''){
	$sql = "update product set product_name='$tensp', product_price = '$gia', product_image='$hinhanh',product_order='$thutu', description='$mota',cate_id='$loaisp' where cate_id = '$id', company_id = '$hangsp' where company_id = '$id')";
	}else{
			$sql = "update product set product_name='$tensp', product_price = '$gia', product_order='$thutu', description='$mota',cate_id='$loaisp' where cate_id = '$id',company_id = '$hangsp' where company_id = '$id'";
	}
	mysqli_query($conn,$sql);
	header('location:../../index.php?manage=quanlychitietsp&ac=sua&id='.$id);
}
 
else{
	//xoa3
	$sql="delete from product where product_id='$id'";
	mysqli_query($conn,$sql);
	header('location: ../../index.php?manage=quanlychitietsp&ac=them');
}
?>