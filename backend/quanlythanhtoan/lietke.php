<?php
include('module/config.php');
 $sql="select * from purchase order by purchase_id asc";
 $run = mysqli_query($conn,$sql);
?>

<table width="100%" border="1">
  <tbody>
    <tr>
      <td><div align="center">ID</td>
      <td><div align="center">Fullname of customer</td>
      <td><div align="center">Purchase Date</td>
     
      <td colspan="2"><div align="center">Manage</td>
    </tr>
<?php	  
	  while ($dong = mysqli_fetch_array($run,MYSQLI_ASSOC)){  
	  ?>
    <tr>
      <td><?php echo $dong['purchase_id'] ?></td>
      <td><?php echo $dong['fullname']?></td>
       <td><?php echo $dong['createdate']?></td>
      
      <td><div align="center"><a href="index.php?manage=quanlythanhtoan&ac=sua&id=<?php echo $dong['purchase_id'] ?>"> Modify</a></td>
      <td><div align="center"><a href="module/quanlythanhtoan/xuly.php?id=<?php echo $dong['purchase_id'] ?>">Delete</a></td>
    </tr>
  </tbody>
	<?php
		  
	}
	?>
</table>
