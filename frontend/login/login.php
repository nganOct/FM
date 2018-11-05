 <?php 
session_start();

require_once("../config.php");
    // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["btn_submit"])) {
        // lấy thông tin người dùng
    $username = $_POST["tentk"];
    $password = $_POST["matkhau"];
        //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
        //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
    $username = strip_tags($username);
    $username = addslashes($username);
    $password = strip_tags($password);
    $password = addslashes($password);
    if ($username == "" || $password =="") {
        echo "username hoặc password bạn không được để trống!";
    }else{
        $sql = "select * from user where username = '$username' and password = '$password' ";
        $query = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($query);
        if ($num_rows==0) {
            echo "tên đăng nhập hoặc mật khẩu không đúng !";
        }else{
                //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
            $_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
            header('Location: ../../index.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
	<meta charset="UTF-8">
	<title>Login</title>
	
	
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

	<link rel="stylesheet" href="css/style.css">

	
</head>
<style type="text/css">
img{
	display: block;
	margin-left: auto;
	margin-right: auto;
}
</style>
<body>

	<div class="login-wrap">
		<a href="../../index.php">
			<img src="../images/fam.png" style="width: 75%; height: 75%; margin-top: 20px; margin-bottom: 15px">
		</a>
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>

			<div class="login-form">
						<form action="login.php" method="post" enctype="multipart/form-data" >
					<div class="sign-in-htm">
						<div class="group">
							<label for="user" class="label">Username</label>
							<input id="user" type="text" class="input" name="tentk">
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input id="pass" type="password" class="input" data-type="password" name="matkhau">
						</div>
						<br>
						<div class="group">
							<input type="submit" class="button" value="Sign In" name="btn_submit">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<a href="#forgot">Forgot Password?</a>
						</div>
					</div>
				</form>
				<form action="xuly.php" method="post" enctype="multipart/form-data">
					<div class="sign-up-htm">
						<div class="group">
							<label for="user" class="label">Username</label>
							<input id="user" type="text" class="input" name="username">
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input id="pass" type="password" class="input" data-type="password" name="password">
						</div>
						<div class="group">
							<label for="pass" class="label">Repeat Password</label>
							<input id="pass" type="password" class="input" data-type="password" name="repass">
						</div>
						<div class="group">
							<label for="pass" class="label">Email Address</label>
							<input id="pass" type="text" class="input" name="email">
						</div>
						<div class="group">
							<label for="pass" class="label">Phone Number</label>
							<input id="pass" type="text" class="input" name="phone">
						</div>
						<div class="group">
							<label for="pass" class="label">Address</label>
							<input id="pass" type="text" class="input" name="address">
						</div>
						<div class="group">
							<input type="submit" class="button" value="Sign Up" name="dangky">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<label for="tab-1">Already Member?</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div> 
	</body>
	</html>
