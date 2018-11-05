<?php
    if (!isset($_POST['Submit'])){           
    include('../config.php');
                   
    $username   = ($_POST['username']);
    $password   = ($_POST['password']);
    $repass     = ($_POST['repass']);
    $email      = ($_POST['email']);
    $phone     = ($_POST['phone']);
    $address     = ($_POST['address']);

    // Mã khóa mật khẩu


    $sql_check = "SELECT * FROM user WHERE username = '$username' or email = '$email'";
    $kiemtra = mysqli_query($conn, $sql_check);
  
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$username || !$password|| !$phone ||!$email||!$repass ||!$address )
    {
        echo "Bạn Hãy Điền Đủ Thông Tin Đăng Ký <a href='javascript: history.go(-1)'> Back </a>";
        exit;
    }
   elseif(mysqli_num_rows($kiemtra)> 0)
          {
               echo "Username hoac Email đã tồn tại <a href='javascript: history.go(-1)'> Back </a>";
	           exit;
           }
    elseif($password < 8)
    {
        echo "Mật khẩu cần có ít nhất 8 ký tự <a href='javascript: history.go(-1)'> Back </a>";
        exit;
    }
     elseif($repass != $password )
    {
        echo "Hãy Nhập Lại Mật Khẩu Cho Đúng <a href='javascript: history.go(-1)'> Back </a>";
        exit;
    }
    elseif (strlen($username) < 8 || strlen($username) > 20)
    {
        echo "Tên tài khoản phải 8-20 ký tự <a href='javascript: history.go(-1)'> Back </a>";
		exit;
    }
    elseif (preg_match('/\W/', $username))
    {
        echo "Tên tài khoản không được chứa ký tự đặc biệt hoặc dấu cách <a href='javascript: history.go(-1)'> Back </a>";
		exit;
    }
        else{           
			            $password = md5(($_POST["password"]));
						$sql = "INSERT INTO user(username,password,email,phone,address) VALUES ('$username', 
                        '$password','$email','$phone','$address')"; 
                    mysqli_query($conn, $sql);
            }
}
 ?>
 <h3 style="text-align: center"><a href="login.php">Đăng Ký Thành Công</a></h3>

