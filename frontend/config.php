<?php
$maychu='localhost';
$tentaikhoan='root';
$pass='';
$csdl='fmart';
$conn=mysqli_connect($maychu,$tentaikhoan,$pass,$csdl) or die('No connection right now');
mysqli_select_db($conn,$csdl);
?>