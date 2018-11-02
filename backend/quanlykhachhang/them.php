
<?php
include('module/config.php');
?>
<form action="module/quanlykhachhang/xuly.php" method="post" enctype="multipart/form-data">
<table border="1">
  <tbody>
    <tr>
      <td colspan="2"><div align="center">Add Member</td>
    </tr>
    <tr>
      <td width="17%"><div align="center">Username</td>
      <td width="83%"><input type="text" name="username"></td>
    </tr>
    <tr>
      <td><div align="center">Password</td>
      <td><input type="password" name="password"></td>
    </tr>
    <tr>
      <td><div align="center">Address</td>
      <td><input type="text" name="address"></td>
    </tr>
    <tr>
      <td><div align="center">Email</td>
      <td><input type="text" name="email"></td>
    </tr>
    <tr>
      <td><div align="center">Fullname</td>
      <td><input type = "text" name="fullname" ></td>
    </tr>
    <tr>
                    <td>
                        Gender :
                    </td>
                    <td>
                        <select name="gender">
                            <option value=""></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </td>
                </tr>
    <tr>
		<div align="center">
      <button><input type="submit" name="them" id="them" value="Submit" ></button>
    </tr>
  </tbody>
</table>
</form>