<?php
include('module/config.php');
$sql = "select * from product,category,company where product.cate_id = category.cate_id and product.company_id = company.company_id order by product.product_id desc";

$run=mysqli_query($conn,$sql);
?>
<table border="1">
  <tbody>
    <tr>
      <td><div align="center">ID</td>
      <td><div align="center">Name</td>
      <td><div align="center">Image</td>
      <td><div align="center"> Price </td>
	  <td><div align="center"> Category </td>
	  <td><div align="center"> Company </td>
	  <td><div align="center"> Description </td>	  
      <td><div align="center">Order num</td>
      <td colspan="2"><div align="center">Manage</td>
    </tr>

	  <?php
	  
	  while( $dong = mysqli_fetch_array($run,MYSQLI_ASSOC)){

	  ?>
    <tr>
      <td height="176"><div align="center"><?php echo $dong['product_id'] ?></td>
      <td><div align="center"><?php echo $dong['product_name']?></td>
      <td><div align="center"><img src="module/quanlychitietsp/uploads/<?php echo $dong['product_image']?>" width="60" height="60"></td>
      <td><div align="center"><?php echo $dong['product_price']?></td>
	  <td><div align="center"><?php echo $dong['cate_name']?></td>
	  <td><div align="center"><?php echo $dong['company_name']?></td>
	  <td><div align="center"><?php echo $dong['description']?></td>
      <td><div align="center"><?php echo $dong['product_order']?></td>
      <td><div align="center"><a href="index.php?manage=quanlychitietsp&ac=sua&id=<?php echo $dong['product_id']?>
		  ">Modify</a></td>
      <td><div align="center"><a href="module/quanlychitietsp/xuly.php?id=<?php echo $dong['product_id'] ?>">Delete</a></td>
    </tr>
	  <?php
		
	  }
		  ?>
  </tbody>
</table>
