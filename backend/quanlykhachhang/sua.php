<?php
	$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='demo';
	$conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('No connection right now');
	mysqli_select_db($conn, $csdl);
  $sql = "select * from member where u_id = $_GET[id]";
  $run = mysqli_query ($conn,$sql);
   $dong = mysqli_fetch_array($run, MYSQLI_ASSOC);
 

?>
<form action="module/quanlykhachhang/xuly.php?id=<?php echo $dong['u_id']?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tbody>
    <tr>
      <td colspan="2"><div align="center">Modify Member</td>
   
    <tr>
      <td width="28%" height="26"><div align="center">Username</td>
      <td width="72%"><input type="text" name="username" value="<?php echo $dong['username']?>"></td>
    </tr>
    <tr>
      <td><div align="center">Password</td>
      <td><textarea name="password" cols="20" rows="8"><?php echo $dong['password']?></textarea></td>
    </tr>
    <tr>
      <td><div align="center">Address</td>
      <td><textarea name="address" cols="20" rows="8"><?php echo $dong['address']?></textarea></td>
    </tr>
    <tr>
      <td><div align="center">Email</td>
      <td><textarea name="email" cols="20" rows="8"><?php echo $dong['email']?></textarea></td>
    </tr>
    <tr>
      <td><div align="center">Fullname</td>
      <td><textarea name="fullname" cols="20" rows="8"><?php echo $dong['fullname']?></textarea></td>
    </tr>
    <tr>
    <td>Gender : </td><td><select name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </td>
                </tr>
    <tr>
      <td colspan="2"><div align="center"><input type="submit" name="sua" id="sua" value="Modify"></td>
    </tr>
  </tbody>
</table>
</form>