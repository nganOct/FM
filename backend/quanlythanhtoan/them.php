
<?php
include('module/config.php');
?>
<form action="module/quanlythanhtoan/xuly.php" method="post" enctype="multipart/form-data">
<table border="1">
  <tbody>
    <tr>
      <td colspan="2"><div align="center">Add Payment</td>
    </tr>
    <tr>
      <td width="17%"><div align="center">Fullname of customer</td>
      <td width="83%"><input type="text" name="fullname"></td>
    </tr>
    <tr>
      <td><div align="center">Purchase Date</td>
      <td><input type="datetime-local" name="createdate"></td>
    </tr>
    
    <tr>
		<div align="center">
      <button><input type="submit" name="them" id="them" value="Submit" ></button>
    </tr>
  </tbody>
</table>
</form>