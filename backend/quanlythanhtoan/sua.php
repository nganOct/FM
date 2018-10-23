<?php
	$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='demo';
	$conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('No connection right now');
	mysqli_select_db($conn, $csdl);
  $sql = "select * from purchase where purchase_id = $_GET[id]";
  $run = mysqli_query ($conn,$sql);
   $dong = mysqli_fetch_array($run, MYSQLI_ASSOC);
 

?>
<form action="module/quanlythanhtoan/xuly.php?id=<?php echo $dong['purchase_id']?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tbody>
    <tr>
      <td colspan="2"><div align="center">Modify Payment</td>
   
    <tr>
      <td width="28%" height="26"><div align="center">Fullname of customer</td>
      <td width="72%"><input type="text" name="fullname" value="<?php echo $dong['fullname']?>"></td>
    </tr>
    <tr>
      <td><div align="center">Purchase Date</td>
      <td><textarea name="createdate" cols="20" rows="8"><?php echo $dong['createdate']?></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><input type="submit" name="sua" id="sua" value="Modify"></td>
    </tr>
  </tbody>
</table>
</form>