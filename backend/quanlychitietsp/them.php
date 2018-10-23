
<?php
include('module/config.php');
?>
<form action="module/quanlychitietsp/xuly.php" method="post" enctype="multipart/form-data">
<table border="1">
  <tbody>
    <tr>
      <td colspan="2"><div align="center">Add Product Details</td>
    </tr>
    <tr>
      <td width="17%"><div align="center">Name</td>
      <td width="83%"><input type="text" name="tensp"></td>
    </tr>
    <tr>
      <td><div align="center">Price</td>
      <td><input type="text" name="gia"></td>
    </tr>
    <tr>
      <td><div align="center">Image</td>
      <td><input type="file" name="hinhanh"></td>
    </tr>
    <tr>
      <td><div align="center">Description</td>
      <td><textarea name="motasp" cols="20" rows="8"></textarea></td>
    </tr>
	  <?php 
	  $sql="select * from category";
	  $run=mysqli_query($conn,$sql);
	  ?>
    <tr>
      <td><div align="center">Category</td>
      <td><select name="loaisp"><?php while($dong = mysqli_fetch_array($run,MYSQLI_ASSOC)){
		  ?>
		  <option value="<?php echo $dong['cate_id']?>"><?php echo $dong['cate_name']?></option>
		  <?php
                 }
			  ?>
		  </select></td>
    </tr>
	  </tr>
	  <?php 
	  $sql="select * from company";
	  $run=mysqli_query($conn,$sql);
	  ?>
    <tr>
      <td><div align="center">Company</td>
      <td><select name="hangsp"><?php while($dong = mysqli_fetch_array($run,MYSQLI_ASSOC)){
		  ?>
		  <option value="<?php echo $dong['company_id']?>"><?php echo $dong['company_name']?></option>
		  <?php
                 }
			  ?>
		  </select></td>
    </tr>
    <tr>
      <td><div align="center">Order num</td>
      <td><input type="text" name="thutu"></td>
    </tr>
    <tr>
		<div align="center">
      <button><input type="submit" name="them" id="them" value="Submit" ></button>
    </tr>
  </tbody>
</table>
</form>