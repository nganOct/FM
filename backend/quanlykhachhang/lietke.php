<?php
include('module/config.php');
 $sql="select * from member order by u_id desc";
 $run = mysqli_query($conn,$sql);
?>

<table width="100%" border="1">
  <tbody>
    <tr>
      <td><div align="center">ID</td>
      <td><div align="center">Username</td>
      <td><div align="center">Password</td>
      <td><div align="center">Address</td>
      <td><div align="center">Email</td>
      <td><div align="center">Fullname</td>
      <td><div align="center">Gender</td>
      <td colspan="2"><div align="center">Manage</td>
    </tr>
<?php	  
	  while ($dong = mysqli_fetch_array($run,MYSQLI_ASSOC)){  
	  ?>
    <tr>
      <td><?php echo $dong['u_id'] ?></td>
      <td><?php echo $dong['username']?></td>
       <td><?php echo $dong['password']?></td>
      <td><?php echo $dong['address']?></td>
      <td><?php echo $dong['email']?></td>
      <td><?php echo $dong['fullname']?></td>
      <td><?php echo $dong['gender']?></td>
      <td><div align="center"><a href="index.php?manage=quanlykhachhang&ac=sua&id=<?php echo $dong['u_id'] ?>"> Modify</a></td>
      <td><div align="center"><a href="module/quanlykhachhang/xuly.php?id=<?php echo $dong['u_id'] ?>">Delete</a></td>
    </tr>
  </tbody>
	<?php
		  
	}
	?>
</table>
