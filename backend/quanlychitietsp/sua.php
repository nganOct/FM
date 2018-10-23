<?php
include('module/config.php');
?>
<?php
$sql = "select * from product where product_id=$_GET[id]";
$run = mysqli_query($conn,$sql);
$dong = mysqli_fetch_array($run,MYSQLI_ASSOC);
?>
<form action="module/quanlychitietsp/xuly.php?id=<?php echo $dong['product_id']?>" method="post" enctype="multipart/form-data">
<table border="1">
  <tbody>
    <tr>
      <td colspan="2"><div align="center">Modify Product Details</td>
    </tr>
    <tr>
      <td width="17%"><div align="center">Name</td>
      <td width="83%"><input type="text" name="tensp" value="<?php echo $dong['product_name']?>"></td>
    </tr>
    <tr>
      <td><div align="center">Price</td>
      <td><input type="text" name="gia" value="<?php echo $dong['product_price']?>"></td>
    </tr>
    <tr>
      <td><div align="center">Image</td>
      <td><input type="file" name="hinhanh"><img src="module/quanlychitietsp/uploads/<?php echo $dong['hinhanh']?>" width="60" height="60"></td>
    </tr>
    <tr>
      <td><div align="center">Description</td>
      <td><textarea name="motasp" cols="20" rows="8"><?php echo $dong['description']?></textarea></td>
    </tr>
	  <?php 
	  $sql_category="select * from category";
	  $run_category=mysqli_query($conn,$sql_category);
	  ?>
    <tr>
      <td><div align="center">Category</td>
      <td><select name="loaisp"><?php while($dong_category = mysqli_fetch_array($run_category,MYSQLI_ASSOC)){
	if ($dong['cate_id']==$dong_category['cate_id']){
		  ?>
		  <option selected value="<?php echo $dong_category['cate_id']?>"><?php echo $dong_category['cate_name']?></option>
		  <?php
                 }else{
			?>
	         <option value="<?php echo $dong_category['cate_id']?>"><?php echo $dong_category['cate_name']?></option>
	         <?php
	          }
              }
			  ?>
		  </select></td>
    </tr>
	  </tr>
	  <?php 
	  $sql_company="select * from company";
	  $run_company=mysqli_query($conn,$sql_company);
	  ?>
    <tr>
	  <tr>
      <td><div align="center">Company</td>
      <td><select name="hangsp"><?php while($dong_company = mysqli_fetch_array($run_company,MYSQLI_ASSOC)){
	if ($dong['company_id']==$dong_company['company_id']){
		  ?>
		  <option selected value="<?php echo $dong_company['company_id']?>"><?php echo $dong_company['company_name']?></option>
		  <?php
                 }else{
			?>
	         <option value="<?php echo $dong_company['company_id']?>"><?php echo $dong_company['company_name']?></option>
	         <?php
	          }
              }
			  ?>
		  </select></td>
    </tr>
    <tr>
      <td><div align="center">Order num</td>
      <td><input type="text" name="thutu" value="<?php echo $dong['product_order']?>"></td>
    </tr>
    <tr>
		<div align="center">
      <button><input type="submit" name="them" id="them" value="Submit" ></button>
    </tr>
  </tbody>
</table>
</form>